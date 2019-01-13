<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Order;
use App\Product;
use App\AddressBook;
use DB;
use App\Shipment;
use Carbon\Carbon;
use App\Transaction;
use Auth;
use App\ShippingMeta;
use App\Customer;
use App\OrderProduct;
use App\Coupon;
use Mail;

class PayuController extends Controller
{
    public function initPayment(Request $request)
    {

      if(!session()->has('order_id')){




          session()->put('plan', $request->plan);
          $product_info = session()->get('plan');
          session()->put('product_id', $request->product);
          $product_id = session('product_id');

          $product = Product::where('products_id', session('product_id'))->with('desc')->first();
          if($request->has('promotion')){
          	$coupon = Coupon::where('code', $request->promotion)->first();
      		if($coupon) {
	      		if($coupon->discount_type == 'percent'){

	      			$price = ($product->price * $coupon->amount) / 100;
	      		} else {
	      			$price = $coupon->amount;
	      		} 

	      		session()->put('price', $price);
      		} else {
      			$price = 0;
      			session()->put('price', 0);
      		}
          } else {
          	$price = 0;
          	session()->put('price', 0);
          }




          if(session()->has('address_id')){
          	$address = AddressBook::where('address_book_id', session()->get('address_id'))->first();
          } else {
          	$address = AddressBook::where('address_book_id', $request->address)->first();
          	session()->put('address_id', $request->address);
          }

          $order = new Order;
          $order->customers_id = Auth::guard('customer')->id();
          $order->customers_name = Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname;
          $order->customers_street_address = $address->entry_street_address;
          $order->customers_city = $address->entry_city;
          $order->customers_state = $address->entry_state;
          $order->customers_postcode = $address->entry_postcode;
          $order->customers_country = 'Türkiye';
          $order->customers_telephone = $address->entry_phone;
          $order->quiz_id = session()->get('checkout_quiz_id');
          $order->customers_email_address = Auth::guard('customer')->user()->customers_email_address;
          $order->period = $product_info;


          $order->delivery_name = $address->entry_firstname . ' ' . $address->entry_lastname;
          $order->delivery_street_address = $address->entry_street_address;
          $order->delivery_city = $address->entry_city;
          $order->delivery_state = $address->entry_state;
          $order->delivery_postcode = $address->entry_postcode;
          $order->delivery_country = 'Türkiye';

          $order->billing_name = $address->entry_firstname . ' ' . $address->entry_lastname;
          $order->billing_street_address = $address->entry_street_address;
          $order->billing_city = $address->entry_city;
          $order->billing_state = $address->entry_state;
          $order->billing_postcode = $address->entry_postcode;
          $order->billing_country = 'Türkiye';

          $order->coupon_amount = $price;


          $order->payment_method = 'Payu';
          //$order->status = 0;
          $order->currency                           =   'try';
          $order->currency_value                     =   1;
          $order->order_price                     =   $product->products_price - $price;
          $order->date_purchased  = date('Y-m-d H:i:s');
          $order->save();


          $date_added                             =   date('Y-m-d h:i:s');

          $orders_history_id = DB::table('orders_status_history')->insertGetId(
              [    'orders_id'  => $order->orders_id,
                   'orders_status_id' => 1,
                   'date_added'  => $date_added,

                   'customer_notified' =>'1',
                   'comments'  =>  ''
              ]);

          $orders_products_id = DB::table('orders_products')->insertGetId(
              [
                   'orders_id'         =>     $order->orders_id,
                   'products_id'       =>     $product['products_id'],
                   'products_name'     =>     $product['desc']['products_name'],
                   'products_price'    =>     $product['products_price'],
                   'final_price'       =>     $product['products_price'],
                   'products_tax'      =>     8,
                   'products_quantity' =>     1,
              ]);

          session()->put('order_id', $order->orders_id);
      }

      if(session()->has('address_id')){
          	$address = AddressBook::where('address_book_id', session()->get('address_id'))->first();
          } else {
          	$address = AddressBook::where('address_book_id', $request->address)->first();
          	session()->put('address_id', $request->address);
          }
      $order = Order::find(session()->get('order_id'));

    	$url = "https://secure.payu.com.tr/order/alu/v3";

    	$product_info = session()->get('plan');

    	$product = Product::where('products_id', session('product_id'))->with('desc')->first();
    	$order = Order::where('orders_id', session()->get('order_id'))->first();



	    $secretKey = '@0WH|BJC07]A8@h9+le(';
      	$arParams = array(
		    //The Merchant's ID
		    "MERCHANT" => "EDSFTRHY",
		    //order external reference number in Merchant's system
		    "ORDER_REF" => session()->get('order_id') . 1,
		    "ORDER_DATE" => gmdate('Y-m-d H:i:s'),

		    //First product details begin
		    "ORDER_PNAME[0]" => $product['desc']['products_name'],
		    "ORDER_PCODE[0]" => $product['desc']['products_id'],
		    "ORDER_PINFO[0]" => $product['desc']['products_name'],
		    "ORDER_PRICE[0]" => $product->products_price - $price,
		    "ORDER_QTY[0]" => "1",
		    //First product details end

		    "PRICES_CURRENCY" => "TRY",
		    "PAY_METHOD" => "CCVISAMC",
		    "SELECTED_INSTALLMENTS_NUMBER" => "0",
		    "LU_ENABLE_TOKEN" => 1, //optional
		    "CC_NUMBER" => $request->cardnumber,
		    "EXP_MONTH" => $request->month,
		    "EXP_YEAR" => $request->year,
		    "CC_CVV" => $request->cvv,
		    "CC_OWNER" => $request->cardholder,

		    //Return URL on the Merchant webshop side that will be used in case of 3DS enrolled cards authorizations.
		    "BACK_REF" => "https://www.packsion.com/3d-return",
		    "CLIENT_IP" => $request->ip(),
		    "BILL_LNAME" => $address->entry_lastname,
		    "BILL_FNAME" => $address->entry_firstname,
		    "BILL_EMAIL" => $order->customers_email_address,
		    "BILL_PHONE" => $address->entry_phone,
		    "BILL_COUNTRYCODE" => "TR",
	      	"BILL_ZIPCODE" => "", //optional
	      	"BILL_ADDRESS" => "", //optional
		    "BILL_ADDRESS2"=> " ", //optional
		    "BILL_CITY" => "", //optional
		    "BILL_STATE" => "", //optional
		    "BILL_FAX" => "", //optional

		    "DELIVERY_LNAME" => "", //optional
		    "DELIVERY_FNAME" => "", //optional
	    	"DELIVERY_EMAIL" => "", //optional
    		"DELIVERY_PHONE" => "", //optional
    		"DELIVERY_COMPANY" => "", //optional
    		"DELIVERY_ADDRESS" => "", //optional
    		"DELIVERY_ADDRESS2" => "", //optional
    		"DELIVERY_ZIPCODE" => "", //optional
		    "DELIVERY_CITY" => "", //optional
		    "DELIVERY_STATE" => "", //optional
		    "DELIVERY_COUNTRYCODE" => "", //optional


		);


      	//print_r($arParams); exit;
		//begin HASH calculation
		ksort($arParams);



		$hashString = "";

		foreach ($arParams as $key=>$val) {
		    $hashString .= strlen($val) . $val;
		}

		$arParams["ORDER_HASH"] = hash_hmac("md5", $hashString, $secretKey);
		//end HASH calculation

		$ch = \curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arParams));
		$response = curl_exec($ch);

		$curlerrcode = curl_errno($ch);
		$curlerr = curl_error($ch);


		if (empty($curlerr) && empty($curlerrcode)) {
		    $parsedXML = @simplexml_load_string($response);
		    $transaction = new Transaction;
		    $transaction->order_id = session()->get('order_id');
		    $transaction->user_id = Auth::guard('customer')->id();
		    $transaction->reference_id = $parsedXML->REFNO;
		    $transaction->request = http_build_query($arParams);
		    $transaction->response = $response;
		    $transaction->status = 'pending';
		    $transaction->save();
		    if ($parsedXML !== FALSE) {

		        //Get PayU Transaction reference.
		        //Can be stored in your system DB, linked with your current order, for match order in case of 3DSecure enrolled cards
		        //Can be empty in case of invalid parameters errors
		        $payuTranReference = $parsedXML->REFNO;

		        if ($parsedXML->STATUS == "SUCCESS") {

		            //In case of 3DS enrolled cards, PayU will return the extra XML tag URL_3DS that contains a unique url for each
		            //transaction. For example https://secure.payu.com.tr/order/alu_return_3ds.php?request_id=2Xrl85eakbSBr3WtcbixYQ%3D%3D.
		            //The merchant must redirect the browser to this url to allow user to authenticate.
		            //After the authentification process ends the user will be redirected to BACK_REF url
		            //with payment result in a HTTP POST request - see 3ds return sample.
		            if (($parsedXML->RETURN_CODE == "3DS_ENROLLED") && (!empty($parsedXML->URL_3DS))) {
		                header("Location:" . $parsedXML->URL_3DS);
		                die();
		            }

		            return redirect('/checkout/success');
		        } else {
		        	session()->flash('error', 1);
		            return redirect('/checkout/payment');
		        }
		    }
		} else {
		    //Was an error comunication between servers
		    echo "cURL error: " . $curlerr;
		}

    }

    public function threeD()
    {

    	
    	if (!isset($_POST['HASH']) || !empty($_POST['HASH'])) {

		    //begin HASH verification
		    $arParams = $_POST;
		    unset($arParams['HASH']);
		 	$trans = Transaction::where('reference_id', $_POST['REFNO'])->orderBy('id', 'desc')->first();

		    $hashString = "";
		    foreach ($arParams as $val) {
		        $hashString .= strlen($val) . $val;
		    }

		    $secretKey = '@0WH|BJC07]A8@h9+le(';
		    $expectedHash = hash_hmac("md5", $hashString, $secretKey);
		    if ($expectedHash != $_POST["HASH"]) {
		        session()->flash('error', 1);
		            return redirect('/checkout/payment');
		        die;
		    }
		    //end hash verification
		    //Use the information below to match against your database record.
		    $payuTranReference = $_POST['REFNO'];
		    $amount = $_POST['AMOUNT'];
		    $currency = $_POST['CURRENCY'];
		    $installments_no = $_POST['INSTALLMENTS_NO'];


		    if ($_POST['STATUS'] == "SUCCESS") {



		    	$trans->status = 'success';
		    	$trans->save();
		        //Update status of the transaction in your database.
		        session()->flash('success', 1);

		        $product_info = session()->get('plan');
		        $order = Order::where('orders_id', $trans->order_id)->first();

		        $this->createShipment($order->orders_id, $order->customers_id, $order->period);
		        $shipment = Shipment::where('order_id', $order->orders_id)->first();

		        $shipment = Shipment::find($shipment->id);
		        $shipment->status = 'paid';
		        $shipment->reference_id = $_POST['REFNO'];
		        $shipment->save();


		        $customer = Customer::find($order->customers_id);

		        $product = OrderProduct::where('orders_id', $trans->order_id)->first();
		        session()->put('order_id', $trans->order_id);

		        $order = Order::where('orders_id', $trans->order_id)->first();
		        $order->token = $_POST['TOKEN_HASH'];
		        $order->save();

		        $last_ship = Shipment::where('order_id', $order->orders_id)->orderBy('ship_at', 'desc')->first();


		        Mail::send('emails.order', ['last_ship'=>$last_ship, 'customer' => $customer, 'shipping' => $shipment, 'order' => $order, 'product' => $product], function ($m) use ($customer) {
                    $m->from('info@packsion.com', 'Packsion');

                    $m->to($customer->customers_email_address, $customer->customers_firstname)->subject('Packsion Sipariş');
                    $m->bcc(['tunckaany@gmail.com', 'irmak@packsion.com']);
                });

		       return redirect('/checkout/success');
		    } else {
		    	$trans->status = 'failed';
		    	$trans->save();
		        session()->flash('error', 1);
		            return redirect('/checkout/payment');
		    }
		} else {
		    session()->flash('error', 1);
		            return redirect('/checkout/payment');
		}
    }


    public function success(){
    	if(!session()->has('success')){
    		return redirect('/');
    	}
    	$order = Order::where('orders_id', session()->get('order_id'))->first();

    	session()->forget('coupon');

    	session()->forget('price');

    	$orders_history_id = DB::table('orders_status_history')->insertGetId(
			[	 'orders_id'  => $order->orders_id,
				 'orders_status_id' => 4,
				 'date_added'  => date('Y-m-d H:i:s'),
				 'customer_notified' =>'1',
				 'comments'  =>  'Payu ödemesi başarılı'
			]);

    	return redirect('/');
    }


    public function createShipment($order_id, $customer_id, $period = 1)
    {

    	$order_detail = DB::table('orders')->where('orders_id', $order_id)->first();
    	for($i=1; $i<=$period; $i++)
    	{
    		$date = Carbon::now();
    		$shipment = new Shipment;
    		$shipment->order_id = $order_id;
    		if($i == 1){
    			$shipment->price = $order_detail->order_price - $order_detail->coupon_amount;
    		} else {
    			$shipment->price = $order_detail->order_price;
    		}

    		$shipment->customer_id = $customer_id;
    		if($i==1){
    			$shipment->ship_at = $date;
    		} else {
    			$shipment->ship_at = $date->addMonths($i-1);
    		}


    		$shipment->save();

    	}
    }


    public function confirmPayment($id, Request $request){
    	$url = "https://secure.payu.com.tr/order/idn.php";
		$secretKey = "73r8^4re37]S#q52?q1r";

		$shipment = Shipment::find($id);
		$idn = array(
		    'MERCHANT' => "PACKSONC",
		    'ORDER_REF' => $shipment->reference_id,
		    'ORDER_AMOUNT' => '2.00',//$shipment->price,
		    'ORDER_CURRENCY' => 'TRY',
		    'IDN_DATE' => date('Y-m-d H:i:s'),

		);

		if($request->has('tutar') && $request->tutar > 0){
			$idn['CHARGE_AMOUNT'] = '1.00'; //$request->tutar;

			$shipment->price = '1.00'; //$shipment->price - $request->tutar;
			$shipment->status = 'confirmed';
			$shipment->save();
		} else {
			$metas = ShippingMeta::where('shipping_id', $id)->where('meta_key', 'product')->where('status', 0)->sum('shipment_price');
			$idn['CHARGE_AMOUNT'] = $shipment->price - $metas;
			$shipment->status = 'confirmed';
			$shipment->price = $shipment->price - $metas;
			$shipment->save();
		}




		$hashString = "";
		foreach ($idn as $key => $value) {
		    $hashString .= strlen($value) . $value;
		}

		$hash = hash_hmac('md5', $hashString, $secretKey);

		$idn['ORDER_HASH'] = $hash;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		curl_setopt($ch, CURLOPT_TIMEOUT, 60);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($idn));
		$response = curl_exec($ch);
		echo $response; exit;
		$curlerrcode = curl_errno($ch);
		$curlerr = curl_error($ch);

		return back();

    }

    public function newPayment(Request $request)
    {
      $address = DB::table('address_book')->where('address_book_id', $request->address)->first();

      session()->flash('error', 1);

      return back();
    }


    public function shipmentPay(Request $request)
		{
			$shipments = Shipment::where('status', 'pending')->whereRaw('date(ship_at) = ?', [Carbon::now()->format('Y-m-d')] )->get();
			//print_r($shipments); exit;
			foreach($shipments as $shipment){
				$order = Order::find($shipment->order_id);

			$url = "https://secure.payu.com.tr/order/alu/v3";

			$product_info = DB::table('orders_products')->where('orders_id', $order->orders_id)->first();

			//print_r($product_info); exit;
			$product = Product::where('products_id', $product_info->products_id)->with('desc')->first();
			//$order = Order::where('orders_id', session()->get('order_id'))->first();

			//$customer = Customer::find($order->customers_id);

			//$address = AddressBook::where('address_book_id', session()->get('checkout_address_id'))->first();

			$secretKey = '@0WH|BJC07]A8@h9+le(';
			$arParams = array(
				//The Merchant's ID
				"MERCHANT" => "EDSFTRHY",
				//order external reference number in Merchant's system
				"ORDER_REF" => $shipment->id . $shipment->order_id . $shipment->customer_id ,
				"ORDER_DATE" => gmdate('Y-m-d H:i:s'),

				//First product details begin
				"ORDER_PNAME[0]" => $product->desc->products_name,
				"ORDER_PCODE[0]" => $product->desc->products_id,
				"ORDER_PINFO[0]" => $product->desc->products_description,
				"ORDER_PRICE[0]" => $shipment->price,
				"ORDER_QTY[0]" => "1",
				//First product details end

				"PRICES_CURRENCY" => "TRY",
				"PAY_METHOD" => "CCVISAMC",
				"SELECTED_INSTALLMENTS_NUMBER" => "0",
				"CC_TOKEN" => $order->token, //optional
				"CC_NUMBER" => "",
				"EXP_MONTH" => "",
				"EXP_YEAR" => "",
				"CC_CVV" => "",
				"CC_OWNER" => "",

				//Return URL on the Merchant webshop side that will be used in case of 3DS enrolled cards authorizations.
				"BACK_REF" => "https://packsion.com/3d-return",
				"CLIENT_IP" => $request->ip(),
				"BILL_LNAME" => $order->customers_name,
				"BILL_FNAME" => $order->customers_name,
				"BILL_EMAIL" => $order->customers_email_address,
				"BILL_PHONE" => $order->customers_telephone,
				"BILL_COUNTRYCODE" => "TR",
				"BILL_ZIPCODE" => "", //optional
				"BILL_ADDRESS" => "", //optional
				"BILL_ADDRESS2"=> " ", //optional
				"BILL_CITY" => "", //optional
				"BILL_STATE" => "", //optional
				"BILL_FAX" => "", //optional

				"DELIVERY_LNAME" => "", //optional
				"DELIVERY_FNAME" => "", //optional
				"DELIVERY_EMAIL" => "", //optional
				"DELIVERY_PHONE" => "", //optional
				"DELIVERY_COMPANY" => "", //optional
				"DELIVERY_ADDRESS" => "", //optional
				"DELIVERY_ADDRESS2" => "", //optional
				"DELIVERY_ZIPCODE" => "", //optional
				"DELIVERY_CITY" => "", //optional
				"DELIVERY_STATE" => "", //optional
				"DELIVERY_COUNTRYCODE" => "", //optional


			);



				//begin HASH calculation
				ksort($arParams);

				//print_r($arParams); exit;

				$hashString = "";

				foreach ($arParams as $key=>$val) {
					$hashString .= strlen($val) . $val;
				}

				$arParams["ORDER_HASH"] = hash_hmac("md5", $hashString, $secretKey);
				//end HASH calculation

				$ch = \curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

				curl_setopt($ch, CURLOPT_TIMEOUT, 60);
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($arParams));
				$response = curl_exec($ch);

				$curlerrcode = curl_errno($ch);
				$curlerr = curl_error($ch);


				if (empty($curlerr) && empty($curlerrcode)) {
					$parsedXML = @simplexml_load_string($response);

					if ($parsedXML !== FALSE) {

						//Get PayU Transaction reference.
						//Can be stored in your system DB, linked with your current order, for match order in case of 3DSecure enrolled cards
						//Can be empty in case of invalid parameters errors
						$payuTranReference = $parsedXML->REFNO;

						if ($parsedXML->STATUS == "SUCCESS") {

							$transaction = new Transaction;
							$transaction->order_id = $order->orders_id;
							$transaction->user_id = $order->customers_id;
							$transaction->reference_id = $parsedXML->REFNO;
							$transaction->request = http_build_query($arParams);
							$transaction->response = $response;
							$transaction->status = 'success';
							$transaction->save();

							$checked_ship = Shipment::find($shipment->id);
							$checked_ship->paid_at = Carbon::now();
							$checked_ship->status = 'paid';
							$checked_ship->reference_id = $parsedXML->REFNO;
							$checked_ship->save();

							//In case of 3DS enrolled cards, PayU will return the extra XML tag URL_3DS that contains a unique url for each
							//transaction. For example https://secure.payu.com.tr/order/alu_return_3ds.php?request_id=2Xrl85eakbSBr3WtcbixYQ%3D%3D.
							//The merchant must redirect the browser to this url to allow user to authenticate.
							//After the authentification process ends the user will be redirected to BACK_REF url
							//with payment result in a HTTP POST request - see 3ds return sample.
							if (($parsedXML->RETURN_CODE == "3DS_ENROLLED") && (!empty($parsedXML->URL_3DS))) {
								header("Location:" . $parsedXML->URL_3DS);
								die();
							}

							//return redirect('/checkout/success');
						} else {
							session()->flash('error', 1);

							$transaction->order_id = $order->orders_id;
							$transaction->user_id = $order->customers_id;
							$transaction->reference_id = $parsedXML->REFNO;
							$transaction->request = http_build_query($arParams);
							$transaction->response = $response;
							$transaction->status = 'failed';
							$transaction->save();
						// return redirect('/checkout/payment');
						}
					}
				} else {
					//Was an error comunication between servers
					echo "cURL error: " . $curlerr;
				}
			}



		}

}
