<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

//validator is builtin class in laravel
use Validator;

//to send an email use Mail class in laravel
use Mail;
use App\User;

use App;
use Lang;

use DB;
//for password encryption or hash protected

use Hash;
use App\Administrator;

//for authenitcate login data
use Auth;
//for redirect
use Illuminate\Support\Facades\Redirect;
//use Illuminate\Foundation\Auth\ThrottlesLogins;
//use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

//for requesting a value
use Illuminate\Http\Request;
//use Illuminate\Routing\Controller;

use App\Shipment;
use App\ShippingMeta;
use App\Quiz;
use App\Product;
use App\ProductDescription;
use Excel;
use Carbon\Carbon;
use App\Order;
use App\Customer;

class AdminOrdersController extends Controller
{
	//add listingOrders
	public function listingOrders(){
		$title = array('pageTitle' => Lang::get("labels.ListingOrders"));
		//$language_id            				=   $request->language_id;
		$language_id            				=   '1';

		$message = array();
		$errorMessage = array();
		if(request()->segment(2) == 'listingOrders'){
			$orders = DB::table('orders')
				->join('orders_status_history', 'orders.orders_id', '=', 'orders_status_history.orders_id')
				->where('orders_status_history.orders_status_id', '<>', 1)
			->orderBy('date_purchased','DESC')->groupBy('orders.orders_id')->paginate(40);
		} else {
			$orders = DB::table('orders_status_history')
				->join('orders', 'orders.orders_id', '=', 'orders_status_history.orders_id')
				->whereIn('orders_status_history.orders_status_id', [1])
				->whereNotIn('orders_status_history.orders_status_id', [4, 3, 2])
			->orderBy('date_purchased','DESC')->groupBy('orders.orders_id')->paginate(40);
		}


		$index = 0;
		$total_price = array();

		foreach($orders as $orders_data){
			$orders_products = DB::table('orders_products')
				->select('final_price', DB::raw('SUM(final_price) as total_price'))
				->where('orders_id', '=' ,$orders_data->orders_id)
				->get();

			$orders[$index]->total_price = $orders_products[0]->total_price;
			if(request()->segment(2) == 'listingOrders') {
				$orders_status_history = DB::table('orders_status_history')
					->LeftJoin('orders_status', 'orders_status.orders_status_id', '=', 'orders_status_history.orders_status_id')
					->select('orders_status.orders_status_name', 'orders_status.orders_status_id')
					->where('orders_id', '=', $orders_data->orders_id)->orderby('orders_status_history.date_added', 'DESC')->limit(1)->get();
			} else {
				$orders_status_history = DB::table('orders_status_history')
					->LeftJoin('orders_status', 'orders_status.orders_status_id', '=', 'orders_status_history.orders_status_id')
					->select('orders_status.orders_status_name', 'orders_status.orders_status_id')
					->where('orders_id', '=', $orders_data->orders_id)
					->whereNotIn('orders_status_history.orders_status_id', [4,3,2])
					->where('orders_status_history.orders_status_id', 1)
					->orderby('orders_status_history.date_added', 'DESC')->limit(1)->get();
			}


			//print_r($orders_status_history);
			$orders[$index]->orders_status_id = $orders_status_history[0]->orders_status_id;

			$orders[$index]->orders_status = $orders_status_history[0]->orders_status_name;
			$index++;

		}

		$ordersData['message'] = $message;
		$ordersData['errorMessage'] = $errorMessage;


		$ordersData['orders'] = $orders;

		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$ordersData['currency'] = $myVar->getSetting();

		$controller = $this;

		return view("admin.listingOrders",$title)->with('listingOrders', $ordersData)->with('controller', $controller);
	}

	public function getStilistName($id)
	{
		$admin = Administrator::where('myid', $id)->first();

		return $admin->first_name . ' ' . $admin->last_name;
	}

	public function stilist($id){
		$order = Order::where('orders_id', $id)->first();

		$order->stilist = Auth::id();

		$order->save();

		return back();
	}

	public function listingShipments(){
		$month = Carbon::now()->month; // Current month with Carbon
		if(request()->segment(2) == 'listingShipments'){
			//$month = Carbon::now()->month; // Current month with Carbon
			$shipments = Shipment::whereMonth('ship_at', $month)->where('status', '<>', 'shipped')->paginate(50);
		} elseif(request()->segment(2) == 'listingShipped') {
			$shipments = Shipment::where('status', 'shipped')->paginate(50);
		} else {
			$shipments = Shipment::paginate(50);
		}




		foreach($shipments as $key => $shipment){
			$order = DB::table('orders')->where('orders_id', $shipment->order_id)->first();
			$customer = DB::table('customers')->where('customers_id', $shipment->customer_id)->first();
			$count = Shipment::where('order_id', $shipment->order_id)->count();
			$shipment_count = Shipment::where('order_id', $shipment->order_id)->where('status', 'pending')->count();
			$order_details = DB::table('orders_products')->where('orders_id', $shipment->order_id)->first();
			$passive = DB::table('shipping_metas')->where('shipping_id', $shipment->id)->where('status', 0)->first();
			if(count($passive) > 0) {
				$shipments[$key]->passive = 1;
			} else {
				$shipments[$key]->passive = 0;
			}
			$shipments[$key]->order = $order;
			$shipments[$key]->customer = $customer;
			$shipments[$key]->item = $order_details;
			$shipments[$key]->count = $count;
			$shipments[$key]->shipment_count = $shipment_count;
		}

		//print_r($shipments);



		$title = array('pageTitle' => Lang::get("labels.ListingOrders"));

		return view('admin.shipment.list', $title)->with('shipments', $shipments);
	}

	public function shipmentDetail($id, Request $request)
	{
		$title = array('pageTitle' => Lang::get("labels.ViewShipment"));
		$shipment = Shipment::Find($id);

		$customer = Customer::find($shipment->customer_id);

		$order = DB::table('orders')->where('orders_id', $shipment->order_id)->first();

		$products = DB::table('shipping_metas')->where('shipping_id', $id)->where('meta_key', 'product')->get();
		$product = [];
		foreach($products as $key => $prod){
			$product = DB::table('products')->join('products_description', 'products.products_id', 'products_description.products_id')->where('products.products_id', $prod->meta_value)->first();
			$products[$key]->product = $product;
		}

		//print_r( $products);

		if($request->isMethod('post')){
			$shipment->status = $request->status;
			$shipment->tracking_number = $request->tracking_number;
			$shipment->save();
			if($shipment->status == 'shipped'){
				Mail::send('emails.shipment', ['last_ship'=>$request->tracking_number, 'customer' => $customer, 'shipping' => $shipment, 'order' => $order, 'product' => $product], function ($m) use ($customer) {
                    $m->from('info@packsion.com', 'Packsion');

                    $m->to($customer->customers_email_address, $customer->customers_firstname)->subject('Kargonuz Gönderildi');
                    $m->bcc('tunckaany@gmail.com');
                });
			}
				
			return back();
		}

		return view('admin.shipment.detail', $title)->with(['shipment' => $shipment, 'order' => $order, 'products' => $products]);
	}

	public function print_invoice(Request $request)
	{
		$settings = [
            'mode' => 'UTF-8',
            'format' => 'A4',
            'default_font_size' => '8',
            'default_font' => 'Arial',
        ];

        $template = \App\Invoice::find($request->template);
        if(!empty($template->settings)) {
            $settings = array_merge($settings, json_decode($template->settings, true));
            $settings['format'] = $settings['paper_size'];
        }
        include_once app_path('library/mpdf/mpdf.php');
        $mpdf = new \mPDF($settings['mode'], $settings['format'], $settings['default_font_size'], $settings['default_font'], 0, 0, 0, 0);
        $styles = file_get_contents('http://code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css');
        $mpdf->WriteHTML($styles, 1);
        $layout = str_replace([
            ' class="placeholder ui-widget-content ui-draggable ui-draggable-handle ui-resizable selected"',
            ' class="placeholder ui-widget-content ui-draggable ui-draggable-handle ui-resizable"',
            '<div class="ui-resizable-handle ui-resizable-e" style="z-index: 90;"></div>',
            '<div class="ui-resizable-handle ui-resizable-s" style="z-index: 90;"></div>',
            '<div class="ui-resizable-handle ui-resizable-se ui-icon ui-icon-gripsmall-diagonal-se" style="z-index: 90;"></div>',
            'placeholder ui-widget-content'
        ], '', trim($template->layout));
        $i = 0;
        foreach($request->invoice as $shipment_id) {
            $shipment =  Shipment::find($shipment_id);
            $order = Db::table('orders')->where('orders_id', $shipment->order_id)->first();

            $item = DB::table('orders_products')->where('orders_id', $shipment->order_id)->first();


            $metas = DB::table('shipping_metas')->where('shipping_id', $shipment_id)->where('meta_key', 'product')->where('status', 1)->get();
            $subproducts = [];
            $sub_price = '';
            foreach($metas as $key => $meta)
            {
            	$subproducts[] = DB::table('products')->join('products_description', 'products.products_id', 'products_description.products_id')->join('shipping_metas', 'shipping_metas.meta_value', 'products.products_id')->where('products.products_id', $meta->meta_value)->where('shipping_metas.id', $meta->id)->first();

	        }

	        foreach($subproducts as $sub){
	        	$sub_price += $sub->products_price;
	        }
	        //echo $sub_price; exit;

            $invoiceData = [
                '{{item-id}}' => $item->products_id ,
                '{{item-sku}}' => $item->products_id  ,

                '{{item-product}}' => $item->products_name  ,

                '{{item-pieces}}' => 1  ,

                '{{item-price}}' => $item->final_price  ,


                '{{item-amount}}' => number_format($item->final_price / 1.08, 2),
                '{{items_amount}}'=>$item->final_price,
                '{{payment_amount}}' => $item->final_price,
                '{{shipment_amount}}' => 0,
                '{{total_amount}}' => $item->final_price,
                '{{sub_total}}' => number_format($item->final_price / 1.08, 2),
                '{{tax}}' => number_format($item->final_price - ($item->final_price / 1.08), 2),
                '{{store_website}}'=> 'Packsion',
                '{{store_name}}'=>'Packsion',
                '{{invoice_date}}'=> date('Y-m-d'),
                '{{invoice_hour}}'=> date('H:i'),
                '{{customer}}'=>$order->customers_name,
                '{{customer_phone}}'=>$order->customers_telephone,
                '{{customer_email}}'=>$order->customers_email_address,
                '{{payment_method}}'=>'Payu',
                '{{payment_amount}}'=>$item->final_price,
                '{{shipment_method}}'=>'Kargo',
                '{{shipment_amount}}'=>0,
                '{{billing_address}}'=>$order->customers_street_address . '<br>' . $order->billing_city . ' / ' . $order->billing_state . '<br />' . $order->customers_telephone,
                '{{delivery_address}}'=>$order->customers_street_address . '<br>' . $order->billing_city . ' / ' . $order->billing_state . '<br />' . $order->customers_telephone,
                '{{total_amount}}'=>$item->final_price,

            ];
            if(isset($subproducts) && count($subproducts) > 0){
                $invoiceData['{{sub-item-sku}}'] =  implode('<br>', array_map(function ($subproducts){return $subproducts->products_id;}, $subproducts));
                $invoiceData['{{sub-item-product}}'] = implode('<br>', array_map(function ($subproducts){return $subproducts->products_name;}, $subproducts));
                $invoiceData['{{sub-item-pieces}}'] = implode('<br>', array_map(function ($subproducts){return 1;}, $subproducts));
                $invoiceData['{{sub-item-price}}'] = implode('<br>', array_map(function ($subproducts){return number_format($subproducts->shipment_price / 1.08, 2);}, $subproducts) );
            }

            $html = str_replace(array_keys($invoiceData), array_values($invoiceData), $layout);

            if($i != 0) {
                $mpdf->AddPage();
            }
            $mpdf->WriteHTML($html, 2);
            $i++;
        }

        $mpdf->Output(date('d_m_Y_H_i').'.pdf', 'D');
	}

	public function removeProductMeta($shipment, $id)
	{
		ShippingMeta::destroy($id);

		$metas = ShippingMeta::where('shipping_id', $shipment)->where('meta_key', 'product')->get();
		//print_r($metas); exit;
		$shipping = Shipment::find($shipment);
			$products2 = [];
			$price = "";
			foreach($metas as $meta){
				$products2[] = Product::find($meta->meta_value);
				$price += Product::find($meta->meta_value)->products_price;
				$meta->destroy($meta->id);
			}

			foreach($products2 as $item){
				$x = new ShippingMeta();
				$x->meta_key = 'product';
				$x->shipping_id = $shipment;
				$x->meta_value = $item->products_id;
				$x->shipment_price = number_format(($shipping->price / $price) * $item->products_price, 2);
				$x->save();
			}


		return redirect('/admin/shipment/' . $shipment);
	}

	public function getQuiz($id)
	{

		$title = array('pageTitle' => Lang::get("labels.Quiz"));
		$shipment = Shipment::find($id);
		$order = DB::table('orders')->where('orders_id', $shipment->order_id)->first();

		$quiz = Quiz::find($order->quiz_id);

		$user = DB::table('customers')->where('customers_id', $quiz->user_id)->first();


		return view('admin.shipment.quiz', $title)->with('quiz', $quiz)->with('user', $user);
	}

	public function getQuizById($id)
	{
		$title = array('pageTitle' => Lang::get("labels.Quiz"));
		$quiz = Quiz::find($id);
		$user = DB::table('customers')->where('customers_id', $quiz->user_id)->first();

		return view('admin.shipment.quiz', $title)->with('quiz', $quiz)->with('user', $user);
	}

	public function exportQuiz($id)
	{

		$title = array('pageTitle' => Lang::get("labels.Quiz"));
		$shipment = Shipment::find($id);
		$order = DB::table('orders')->where('orders_id', $shipment->order_id)->first();

		$quiz = Quiz::find($order->quiz_id);
		$quiz = json_decode($quiz->quiz);

		return view('admin.shipment.quiz_export', $title)->with('quiz', $quiz);
	}

	public function addProduct($id, Request $request){
		$title = array('pageTitle' => Lang::get("labels.ViewShipment"));

		$shipping = Shipment::find($id);
		$products = [];
		$item_price = "";
		if($request->isMethod('post')){
		foreach($_POST['products'] as $item){

			$products[] = Product::find($item);
			$item_price += Product::find($item)->products_price;
		}


			foreach($products as $item){
				$x = new ShippingMeta();
				$x->meta_key = 'product';
				$x->shipping_id = $id;
				$x->meta_value = $item->products_id;
				$x->shipment_price = number_format(($shipping->price / $item_price) * $item->products_price, 2);
				$x->save();


			}

		$metas = ShippingMeta::where('shipping_id', $id)->where('meta_key', 'product')->get();
		//print_r($metas); exit;
		if(count($metas) > 1){
			$products2 = [];
			$price = "";
			foreach($metas as $meta){
				$products2[] = Product::find($meta->meta_value);
				$price += Product::find($meta->meta_value)->products_price;
				$meta->destroy($meta->id);
			}

			foreach($products2 as $item){
				$x = new ShippingMeta();
				$x->meta_key = 'product';
				$x->shipping_id = $id;
				$x->meta_value = $item->products_id;
				$x->shipment_price = number_format(($shipping->price / $price) * $item->products_price, 2);
				$x->save();
			}
		}

			return redirect('/admin/shipment/' . $id);
		}

		return view('admin.shipment.add_product', $title);
	}

	public function addProductV2($id, Request $request){
		$title = array('pageTitle' => Lang::get("labels.ViewShipment"));
		$myVar = new AdminSiteSettingController();
		$languages = $myVar->getLanguages();

		$sub_products = DB::table('products')->join('products_to_categories', 'products_to_categories.products_id', '=', 'products.products_id')->where('products_to_categories.categories_id', 31)->join('products_description', 'products.products_id', '=', 'products_description.products_id')->orderBy('products.products_id', 'desc')->get()->toArray();

		if($request->has('filter')){

			$sub_products = DB::table('products')
								->join('products_description', 'products.products_id', '=', 'products_description.products_id')
								->join('products_attributes', 'products_attributes.products_id', '=', 'products.products_id')
								->whereIn('products_attributes.options_values_id', $request->get('filter'))

								->groupBy('products.products_id')

								->get()
								->toArray();
		}

		$result = array();
		$result2 = array();
		$attributes = DB::table('products_options')
			->leftJoin('languages','languages.languages_id','=','products_options.language_id')
			->orderby('session_regenerate_id','ASC')->paginate(10);

		$result['attributes'] = $attributes;

		$index = 0;
		foreach($attributes as $attributes_data){

			array_push($result2, $attributes_data);

			$attributes = DB::table('products_options_values_to_products_options')
			->leftJoin('products_options_values', 'products_options_values.products_options_values_id','=', 'products_options_values_to_products_options.products_options_values_id')
			->where('products_options_values_to_products_options.products_options_id','=',$attributes_data->products_options_id)->get();

			$result2[$index]->values =$attributes;
			$index++;
		}

		$result['data'] = $result2;
		$shipping = Shipment::find($id);
		$products = [];
		$item_price = "";
		if($request->isMethod('post')){
		foreach($_POST['products'] as $item){

			$products[] = Product::find($item);
			$item_price += Product::find($item)->products_price;
		}


			foreach($products as $item){
				$x = new ShippingMeta();
				$x->meta_key = 'product';
				$x->shipping_id = $id;
				$x->meta_value = $item->products_id;
				$x->shipment_price = number_format(($shipping->price / $item_price) * $item->products_price, 2);
				$x->save();


			}

		$metas = ShippingMeta::where('shipping_id', $id)->where('meta_key', 'product')->get();
		//print_r($metas); exit;
		if(count($metas) > 1){
			$products2 = [];
			$price = "";
			foreach($metas as $meta){
				$products2[] = Product::find($meta->meta_value);
				$price += Product::find($meta->meta_value)->products_price;
				$meta->destroy($meta->id);
			}

			foreach($products2 as $item){
				$x = new ShippingMeta();
				$x->meta_key = 'product';
				$x->shipping_id = $id;
				$x->meta_value = $item->products_id;
				$x->shipment_price = number_format(($shipping->price / $price) * $item->products_price, 2);
				$x->save();
			}
		}

			return back();
		}

		return view('admin.shipment.add_product_v2', $title)->with('result', $result)->with('products', $sub_products);
	}


	//view order detail
	public function viewOrder(Request $request){
		$title = array('pageTitle' => Lang::get("labels.ViewOrder"));
		$language_id             =   '1';
		$orders_id        	 	 =   $request->id;

		$message = array();
		$errorMessage = array();

		DB::table('orders')->where('orders_id', '=', $orders_id)->update(['is_seen' => 1 ]);

		$order = DB::table('orders')
				->LeftJoin('orders_status_history', 'orders_status_history.orders_id', '=', 'orders.orders_id')
				->LeftJoin('orders_status', 'orders_status.orders_status_id', '=' ,'orders_status_history.orders_status_id')
				->where('orders.orders_id', '=', $orders_id)->orderby('orders_status_history.date_added', 'DESC')->get();

		//foreach
		foreach($order as $data){
			$orders_id	 = $data->orders_id;

			$orders_products = DB::table('orders_products')
				->join('products', 'products.products_id','=', 'orders_products.products_id')
				->select('orders_products.*', 'products.products_image as image')
				->where('orders_products.orders_id', '=', $orders_id)->get();
				$i = 0;
				$total_price  = 0;
				$total_tax	  = 0;
				$product = array();
				$subtotal = 0;
				foreach($orders_products as $orders_products_data){
					$product_attribute = DB::table('orders_products_attributes')
						->where([
							['orders_products_id', '=', $orders_products_data->orders_products_id],
							['orders_id', '=', $orders_products_data->orders_id],
						])
						->get();

					$orders_products_data->attribute = $product_attribute;
					$product[$i] = $orders_products_data;
					$total_price = $total_price+$orders_products[$i]->final_price;

					$subtotal += $orders_products[$i]->final_price;

					$i++;
				}
			$data->data = $product;
			$orders_data[] = $data;
		}

		$orders_status_history = DB::table('orders_status_history')
			->LeftJoin('orders_status', 'orders_status.orders_status_id', '=' ,'orders_status_history.orders_status_id')
			->orderBy('orders_status_history.date_added', 'desc')
			->where('orders_id', '=', $orders_id)->get();

		$orders_status = DB::table('orders_status')->get();

		$ordersData['message'] 					=	$message;
		$ordersData['errorMessage']				=	$errorMessage;
		$ordersData['orders_data']		 	 	=	$orders_data;
		$ordersData['total_price']  			=	$total_price;
		$ordersData['orders_status']			=	$orders_status;
		$ordersData['orders_status_history']    =	$orders_status_history;
		$ordersData['subtotal']    				=	$subtotal;


		//get function from other controller
		$myVar = new AdminSiteSettingController();
		$ordersData['currency'] = $myVar->getSetting();

		return view("admin.viewOrder", $title)->with('data', $ordersData);
	}


	//update order
	public function updateOrder(Request $request){
		 $orders_status 		=	 $request->orders_status;
		 $comments 	 			=	 $request->comments;
		 $orders_id 			= 	 $request->orders_id;
		 $old_orders_status 	= 	 $request->old_orders_status;
		 $date_added			=    date('Y-m-d h:i:s');

		 //get function from other controller
		 $myVar = new AdminSiteSettingController();
		 $setting = $myVar->getSetting();

		 $status = DB::table('orders_status')->where('orders_status_id', '=', $orders_status)->get();

		 $title	  = Lang::get("labels.OrderStatusEmailTitle");
		 $message  = Lang::get("labels.OrderStatusEmailMessagePart1").' '.$orders_id.' '.Lang::get("labels.OrderStatusEmailMessagePart2").' '.$status[0]->orders_status_name.'.';

		 if($old_orders_status==$orders_status){
			 return redirect()->back()->with('error', Lang::get("labels.StatusChangeError"));
		 }else{

		 //orders status history
		 $orders_history_id = DB::table('orders_status_history')->insertGetId(
			[	 'orders_id'  => $orders_id,
				 'orders_status_id' => $orders_status,
				 'date_added'  => $date_added,
				 'customer_notified' =>'1',
				 'comments'  =>  $comments
			]);
//

			if($orders_status=='2'){
				//quantity of product

				$orders_products = DB::table('orders_products')->where('orders_id', '=', $orders_id)->get();

				foreach($orders_products as $products_data){
					DB::table('products')->where('products_id', $products_data->products_id)->update([
						'products_quantity' => DB::raw('products_quantity - "'.$products_data->products_quantity.'"'),
						'products_ordered'  => DB::raw('products_ordered + 1')
						]);
				}
			}

			$devices = DB::table('devices')
				->LeftJoin('customers','customers.customers_id','=','devices.customers_id')
				->where('devices.is_notify','=', '1')
				->where('devices.customers_id', $request->customers_id)->get();

			$temp['devices'] = $devices;
			$temp['message'] = $message;

			//status change email
			/*Mail::send('/mail/orderStatus', ['data' => $temp], function($m) use ($temp){
				$m->to($temp['devices'][0]->customers_email_address)->subject('Ionic Ecommerce Order Status')->getSwiftMessage()
				->getHeaders()
				->addTextHeader('x-mailgun-native-send', 'true');
			});*/

			$sendData = array
				  (
				'body' 	=> $message,
				'title'	=> $title ,
						'icon'	=> 'myicon',/*Default Icon*/
						'sound' => 'mySound'/*Default sound*/
				  );

			//status change notifications
			foreach($devices as $devices_data){
				print $devices_data->device_id.'<br>';
				if(!empty($devices_data->device_id)){
					$notifyController = new AdminNotificationController();
					$response = $notifyController->fcmNotification($devices_data->device_id, $sendData);
				}
			}

		return redirect()->back()->with('message', Lang::get("labels.OrderStatusChangedMessage"));
		}

	}

	//deleteorders
	public function deleteOrder(Request $request){
		DB::table('orders')->where('orders_id', $request->orders_id)->delete();
		DB::table('orders_products')->where('orders_id', $request->orders_id)->delete();
		return redirect()->back()->withErrors([Lang::get("labels.OrderDeletedMessage")]);
	}

}
