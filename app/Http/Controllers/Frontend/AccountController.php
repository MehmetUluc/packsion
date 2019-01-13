<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;
use Auth;
use DB;
use App\State;
use App\District;
use App\AddressBook;
use Validator;
use App\Quiz;
use Carbon\Carbon;
use App\Shipment;
use App\ShippingMeta;

class AccountController extends Controller
{
    public function profile()
    {
    	$user = Auth::guard('customer')->user();
    	return view('frontend.account.user', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
    	$id = Auth::guard('customer')->id();

    	$user = Customer::find($id);

    	$user->customers_email_address = $request->customers_email_address;
    	$user->customers_gender = $request->customers_gender;
    	$user->customers_firstname = $request->customers_firstname;
    	$user->customers_lastname = $request->customers_lastname;

    	$user->save();

    	return back();
    }

    public function getQuizzes()
    {
        $quizzes = Quiz::where('user_id', Auth::guard('customer')->id())->where('deleted', 0)->get();
        return view('frontend.account.quiz', compact('quizzes'));
    }

    public function getQuiz($id, $step)
    {
        $quiz = Quiz::find($id);
          $body_class = "sidebar wizard transition-support webkit";


        $quiz_ = Quiz::find($id);
        $quiz = json_decode($quiz_->quiz);

        $form = (array)json_decode(json_encode($quiz));


        if($quiz_->gender)
        {
            session()->put('gender', $quiz_->gender);
        } else {
            session()->put('gender', $form['gender']);
        }
        if(request()->has('exist')){
            session()->put('exist', 1);
        }
        


        

        session()->put('exist_quiz', $form);


        return view('frontend.quizzes.quiz', compact('quiz_', 'quiz', 'step', 'body_class'));
    }

    public function orders()
    {
        $orders = DB::table('orders')->where('customers_id', Auth::guard('customer')->id())
                                ->join('orders_status_history', 'orders.orders_id', 'orders_status_history.orders_id')
                                ->join('orders_products', 'orders.orders_id', 'orders_products.orders_id')
                                ->where('orders_status_history.orders_status_id', 4)
                                ->orderBy('orders.orders_id', 'desc')
                                ->get();



        foreach($orders as $key => $order){
            $canceled = DB::table('orders')->where('customers_id', Auth::guard('customer')->id())
                                ->join('orders_status_history', 'orders.orders_id', 'orders_status_history.orders_id')
                                ->join('orders_products', 'orders.orders_id', 'orders_products.orders_id')
                                ->where('orders_status_history.orders_status_id', 3)
                                ->where('orders.orders_id', $order->orders_id)
                                ->first();

            $orders[$key]->canceled = $canceled;

            $count = Shipment::where('order_id', $order->orders_id)->count();
            $shipment_count = Shipment::where('order_id', $order->orders_id)->where('status', 'pending')->count();

            $orders[$key]->count = $count;
            $orders[$key]->shipment_count = $shipment_count;

        }


        return view('frontend.account.order', compact('orders'));

    }

    public function orderDetail($id)
    {
        $month = Carbon::now()->month; // Current month with Carbon
        $shipments = Shipment::whereMonth('ship_at', $month)->where('order_id', $id)->where('customer_id', Auth::guard('customer')->id())->get();

        foreach($shipments as $key => $ship){
            $shipments[$key]->meta = DB::table('shipping_metas')->where('shipping_id', $ship->id)->join('products', 'products.products_id', 'shipping_metas.meta_value')->join('products_description', 'products.products_id', 'products_description.products_id' )->get();
        }
        return view('frontend.account.order_detail', compact('shipments'));
    }

    public function password()
    {
    	return view('frontend.account.password');
    }

    public function cancelProduct($id, Request $request)
    {
        $shipping_meta = ShippingMeta::find($id);
        $shipping_meta->status = 0;
        $shipping_meta->reason = $request->reason;
        $shipping_meta->reason2 = $request->reason2;
        $shipping_meta->save();
        return back();
    }

    public function applyProduct($id)
    {
        $shipping_meta = ShippingMeta::find($id);
        $shipping_meta->status = 1;
        $shipping_meta->save();
        return back();
    }

    public function passwordUpdate(Request $request)
    {

        $user = Customer::find(Auth::guard('customer')->id());

        echo $user->password;

        $validator = Validator::make($request->all(), [
            'old_password' => 'required|old_password:' . $user->password,
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            session()->flash('error', 1);

            return back();
        }




         $user->password = bcrypt($request->password);
         $user->save();

            session()->flash('success', 1);



    	return back();
    }

    public function address()
    {
        $address = DB::table('address_book')->where('customers_id', Auth::guard('customer')->id())->get();

        return view('frontend.account.address', compact('address'));
    }

    public function editAddress($id)
    {
        $address = DB::table('address_book')->where('address_book_id', $id)->first();

        $states = State::where('country_id', 213)->orderBy('name', 'asc')->get();

        $state = State::where('name', $address->entry_city)->first();

        $districts = District::where('state_id', $state->id)->get();

        return view('frontend.account.edit_address', compact('address', 'states', 'districts'));
    }


    public function setAddress($id, Request $request)
    {


        $address = AddressBook::find($id);

            $already = DB::table('address_book')->select('entry_name')->where('customers_id', Auth::guard('customer')->id())->where('entry_name', $request->title)->get();
        $title = explode(' ', $request->title);
        if(empty($already[0])){
                $address->entry_name = $title[0];
        } else {
                $address->entry_name = $title[0] . ' ' .date('Y-m-d H:i');
        }
            $address->entry_firstname= $request->name;
            $address->entry_lastname= $request->lastname;
            $address->entry_street_address= $request->address;
            $address->entry_suburb= $request->town;
            $address->entry_city= $request->state;
            $address->entry_state= $request->district;
            $address->entry_postcode= $request->post_code;
            $address->entry_phone= $request->phone;

            $address->save();
        return back();
    }

    public function remove($id)
    {
        AddressBook::destroy($id);

        return back();
    }

    public function removeQuiz($id)
    {
        $quiz = Quiz::find($id);

        $quiz->deleted = 1;
        $quiz->save();

        return back();
    }

    public function newAdress(Request $request)
    {

        $states = State::where('country_id', 213)->orderBy('name', 'asc')->get();

        $address = new  \stdClass();
        $address->entry_city = '';
        $districts = new \stdClass();

        return view('frontend.account.edit_address', compact('states', 'address', 'districts'));
    }


    public function postAddress(Request $request)
    {


        $address = new AddressBook;

           $already = DB::table('address_book')->select('entry_name')->where('customers_id', Auth::guard('customer')->id())->where('entry_name', $request->title)->get();

        if(empty($already[0])){
                $address->entry_name = $request->title;
        } else {
                $address->entry_name = $request->title . ' ' .date('Y-m-d H:i');
        }
            $address->customers_id= Auth::guard('customer')->id();
            $address->entry_firstname= $request->name;
            $address->entry_lastname= $request->lastname;
            $address->entry_street_address= $request->address;
            $address->entry_suburb= $request->town;
            $address->entry_city= $request->state;
            $address->entry_state= $request->district;
            $address->entry_postcode= $request->post_code;
            $address->entry_phone= $request->phone;

            $address->save();
        return redirect('/account/address');
    }
}
