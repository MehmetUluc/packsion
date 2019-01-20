<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quiz;
use Auth;
use App\AddressBook;
use App\State;
use App\District;
use App\Order;
use App\Product;
use DB;
use App\Coupon;
use App\Customer;
use Mail;

class SubscriptionController extends Controller
{
    public function quiz($step, Request $request)
    {
        if($request->has('product_id')){
           session()->put('product_id', $request->product_id);

        }
        if($request->has('gender')){
          session()->forget('gender');
          session()->put('gender', $request->gender);
        }

        $body_class = "sidebar wizard transition-support webkit";
    	return view('frontend.quiz.quiz', compact('step', 'body_class'));
    }

    public function coupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->coupon)->first();

        if($coupon){

            session()->put('coupon', $request->coupon);
            if($coupon->discount_type == 'percent'){

                $data = [
                    'message' => 'Kuponunuzla %' . $coupon->amount . " kadar indirim kazandınız. İlk teslimat için tutar hesaplanacak olup kredi kartınıza bu şekilde yansıtılacaktır.",
                    'success' => 1

                ];
                return json_encode($data);
            } else {

                $data = [
                    'message' => 'Kuponunuzla ' . $coupon->amount . ' TL kadar indirim kazandınız. İlk teslimat için tutar hesaplanacak olup kredi kartınıza bu şekilde yansıtılacaktır.',
                    'success' => 1
                ];
                return json_encode($data);
            }
        } else {

            session()->forget('coupon');

            $data = [
                'message' => 'Geçersiz kupon kodu girdiniz.',
                'success' => 0
            ];
            return json_encode($data);
        }
    }

    public function quizedit($id)
    {
        $quiz_ = Quiz::find($id);
        $quiz = json_decode($quiz_->quiz);

        return view('frontend.subscription.quiz_edit', compact('quiz_', 'quiz'));
    }

    public function quizUpdate($id, $step, Request $request)
    {
      if($step == 1){
          session()->put('quiz_1', $request->quiz);
          return redirect('account/quiz/' . $id . '/step/2');
      }

      if($step == 2){
          session()->put('quiz_2', $request->quiz);
          return redirect('account/quiz/' . $id . '/step/3');
      }

      if($step == 3){
        $flatten = $this->array_flatten($request->quiz);


          session()->put('quiz_3', $flatten);
          return redirect('account/quiz/' . $id . '/step/4');
      }


      if($step == 4){

          $flatten = $this->array_flatten($request->quiz);
          session()->put('quiz_4', $flatten);

          $exist = array_merge(session('quiz_1'), session('quiz_2'), session('quiz_3'), session('quiz_4'));
          $quiz = Quiz::find($id);
          $quiz->title = $exist['title'];
          $quiz->gender = session('gender');
          $quiz->updated = 1;
          

          //$exist = $this->array_multi_to_linear($exist);
          $quiz->quiz = json_encode($exist);
          $quiz->save();
          //print_r($exist); exit;
          if(session()->has('exist')){
            return redirect('/checkout/payment');
          }
          return redirect('/account/quiz');
      }




    }

    public function quizPost(Request $request, $step)
    {
        session()->forget('exist');
        if($step == 1){
            if($request->has('customers_firstname')){

                $exist = Customer::where('customers_email_address', $request->customers_email_address)->first();
                if($exist){
                    session()->put('exist', 1);


                    return back();
                }
                $customer = new Customer;
                $customer->customers_firstname = $request->customers_firstname;
                $customer->customers_lastname = $request->customers_lastname;
                $customer->customers_email_address = $request->customers_email_address;
                $customer->password = '1234';
                $customer->save();

                //print_r($customer); exit;

                $new_customer = Customer::find($customer->customers_id);

                $new_customer->password = bcrypt($customer->customers_id);
                $new_customer->save();

                $data = $new_customer;

                $password = $customer->customers_id;

                Mail::send('emails.new', ['data' => $data, 'password' => $password], function ($m) use ($data) {
                    $m->from('info@packsion.com', 'Packsion');

                    $m->to($data['customers_email_address'], $data['customers_firstname'])->subject('Hoşgeldiniz');
                    $m->bcc('tunckaany@gmail.com');
                });

                Auth::guard('customer')->login($customer);
                session()->put('new_custom', 1);
            }
            session()->put('quiz_1', $request->quiz);
            return redirect('/checkout/quiz/step/2');
        }

        if($step == 2){
            session()->put('quiz_2', $request->quiz);
            return redirect('/checkout/quiz/step/3');
        }

        if($step == 3){
            session()->put('quiz_3', $request->quiz);
            return redirect('/checkout/quiz/step/4');
        }

        if($step == 4){
            session()->put('quiz_4', $request->quiz);

            $quiz = array_merge(session('quiz_1'), session('quiz_2'), session('quiz_3'), session('quiz_4'));
            session()->put('quiz', $quiz);
            if(Auth::guard('customer')->check()){
              return $this->plan();
            } else {
              return redirect('/customer/login');
            }

            //print_r(session('quiz')); exit;
            //return redirect('/checkout/payment');
        }
    }

    public function plan()
    {
        if(!session()->has('quiz')){
            return redirect('/');
        }

        if(!session()->has('checkout_quiz_id')) {



            $quiz_detail = session()->get('quiz');
            $already = DB::table('quizzes')->select('title')->where('user_id', Auth::guard('customer')->id())->where('title', $quiz_detail['title'])->get();
            //print_r($already); exit;
            $quiz = new Quiz;
            $quiz->user_id = Auth::guard('customer')->id();
            $quiz->gender = session('gender');
            if(empty($already[0])){
                    $quiz->title = $quiz_detail['title'];
            } else {
                    $quiz->title = $quiz_detail['title'] . ' ' . date('Y-m-d H:i');
            }
            $quiz->updated = 1;
            $quiz->quiz = json_encode($quiz_detail);
            $quiz->save();

            session()->put('checkout_quiz_id', $quiz->id);


        }

        if(session()->has('new_custom')){
            return redirect('/checkout/payment');
        }
        return redirect('/checkout/payment');

    	//return view('frontend.subscription.plan');
    }

    public function info()
    {
        
        if(!session()->has('new_custom')){
            return redirect('/checkout/payment');
        }
        session()->forget('new_custom');
        $products = Db::table('products')
                    ->join('products_description', 'products.products_id', '=', 'products_description.products_id')
                    ->join('products_to_categories', 'products.products_id', '=', 'products_to_categories.products_id')
                    ->where('products_to_categories.categories_id', 30)
                    ->get();
        $body_class = "sidebar transition-support webkit";

        $images = DB::table('products_images')->where('products_id', 83)->get();

        return view('frontend.boxesgender_info', compact('body_class', 'products', 'images'));
    }

    public function planPost(Request $request)
    {
        session()->put('plan', $request->plan);
        return redirect('checkout/address');
    }

    public function address()
    {
        $addresses = AddressBook::where('customers_id', Auth::guard('customer')->id())->get();
        return view('frontend.subscription.address', compact('addresses'));
    }

    public function addressForm()
    {
        $states = State::where('country_id', 213)->orderBy('name', 'asc')->get();
        return view('frontend.subscription.new_address', compact('states'));
    }

    public function postAddress(Request $request)
    {

    }

    public function state($state)
    {
        $district = District::where('state_id', $state)->orderBy('name', 'asc')->get();

        return $district;
    }

    public function newAddress(Request $request)
    {


        $address = new AddressBook;
        $already = DB::table('address_book')->select('entry_name')->where('customers_id', Auth::guard('customer')->id())->where('entry_name', $_POST['entry_name'])->get();

        if(empty($already[0])){
                $address->entry_name = $_POST['entry_name'];
        } else {
                $address->entry_name = $_POST['entry_name'] . ' ' .date('Y-m-d');
        }
        $address->entry_firstname = $_POST['entry_firstname'];
        $address->entry_lastname = $_POST['entry_lastname'];
        $address->entry_street_address = $_POST['entry_street_address'];
        $address->entry_city = $_POST['entry_city'];
        $address->entry_state = $_POST['entry_state'];
        $address->entry_postcode = $_POST['entry_postcode'];
        $address->entry_phone = $_POST['entry_phone'];
        $address->entry_suburb = $_POST['entry_suburb'];
        $address->customers_id = Auth::guard('customer')->id();

        $address->save();


        session()->put('address_id', $address->address_book_id);

        return redirect('/checkout/address');
    }

    public function setAddress(Request $request)
    {
        session()->put('checkout_address_id', $request->saved_address);

        return redirect('/checkout/payment');
    }

    public function savedQuiz(Request $request)
    {
        if($request->has('product_id'))
        session()->put('product_id', $request->product_id);
        $quizes = Quiz::where('user_id', Auth::guard('customer')->id())->where('gender', $request->gender)->get();
        return view('frontend.subscription.saved_quiz', compact('quizes'));
    }

    public function setQuiz(Request $request)
    {
        session()->put('quiz', 1);
        session()->put('checkout_quiz_id', $request->saved_quiz);

        return redirect('/checkout/plan');
    }

    function array_flatten($array) { 
      if (!is_array($array)) { 
        return false; 
      } 
      $result = array(); 
      foreach ($array as $key => $value) { 
        if (is_array($value)) { 
          $result[$key] =$this->array_flatten($value); 
        } else { 
          $result[$key] = $value; 
        } 
      } 
      return $result; 
    }

    public function payment()
    {



        // if(!session()->has('order_id')){
        //     $product_info = session()->get('plan');

        //     $product = Product::where('products_id', session('product_id'))->with('desc')->first();

        //     $address = AddressBook::where('address_book_id', session()->get('checkout_address_id'))->first();

        //     $order = new Order;
        //     $order->customers_id = Auth::guard('customer')->id();
        //     $order->customers_name = Auth::guard('customer')->user()->customers_firstname . ' ' . Auth::guard('customer')->user()->customers_lastname;
        //     $order->customers_street_address = $address->entry_street_address;
        //     $order->customers_city = $address->entry_city;
        //     $order->customers_state = $address->entry_state;
        //     $order->customers_postcode = $address->entry_postcode;
        //     $order->customers_country = 'Türkiye';
        //     $order->customers_telephone = $address->entry_phone;
        //     $order->quiz_id = session()->get('checkout_quiz_id');
        //     $order->customers_email_address = Auth::guard('customer')->user()->customers_email_address;


        //     $order->delivery_name = $address->entry_firstname . ' ' . $address->entry_lastname;
        //     $order->delivery_street_address = $address->entry_street_address;
        //     $order->delivery_city = $address->entry_city;
        //     $order->delivery_state = $address->entry_state;
        //     $order->delivery_postcode = $address->entry_postcode;
        //     $order->delivery_country = 'Türkiye';

        //     $order->billing_name = $address->entry_firstname . ' ' . $address->entry_lastname;
        //     $order->billing_street_address = $address->entry_street_address;
        //     $order->billing_city = $address->entry_city;
        //     $order->billing_state = $address->entry_state;
        //     $order->billing_postcode = $address->entry_postcode;
        //     $order->billing_country = 'Türkiye';


        //     $order->payment_method = 'Payu';
        //     //$order->status = 0;
        //     $order->currency                           =   'try';
        //     $order->currency_value                     =   1;
        //     $order->order_price                     =   $product->products_price;
        //     $order->date_purchased  = date('Y-m-d H:i:s');
        //     $order->save();


        //     $date_added                             =   date('Y-m-d h:i:s');

        //     $orders_history_id = DB::table('orders_status_history')->insertGetId(
        //         [    'orders_id'  => $order->orders_id,
        //              'orders_status_id' => 1,
        //              'date_added'  => $date_added,

        //              'customer_notified' =>'1',
        //              'comments'  =>  ''
        //         ]);

        //     $orders_products_id = DB::table('orders_products')->insertGetId(
        //         [
        //              'orders_id'         =>     $order->orders_id,
        //              'products_id'       =>     $product['products_id'],
        //              'products_name'     =>     $product['desc']['products_name'],
        //              'products_price'    =>     $product['products_price'],
        //              'final_price'       =>     $product['products_price'],
        //              'products_tax'      =>     8,
        //              'products_quantity' =>     1,
        //         ]);

        //     session()->put('order_id', $order->orders_id);
        // }


        // $order = Order::find(session()->get('order_id'));

        //print_r($order);

        $addresses = AddressBook::where('customers_id', Auth::guard('customer')->id())->get();

        $states = State::where('country_id', 213)->orderBy('name', 'asc')->get();

        $body_class = "sidebar wizard transition-support webkit";

        return view('frontend.subscription.payment', compact('addresses', 'body_class', 'states'));
    }
}
