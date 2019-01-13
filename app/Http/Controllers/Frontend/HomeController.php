<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Influencer;
use DB;
use App\Slideshow;
use Auth;
use App\AddressBook;
use App\Quiz;
use Mail;
use App\Customer;

class HomeController extends Controller
{
    public function index()
    {
    	$influencers = Influencer::all();

    	$products = Db::table('products')
    				->join('products_description', 'products.products_id', '=', 'products_description.products_id')
    				->join('products_to_categories', 'products.products_id', '=', 'products_to_categories.products_id')
    				->where('products_to_categories.categories_id', 30)
    				->get();
            $slideshows = Slideshow::all();
    	return view('frontend.index', compact('influencers', 'products', 'slideshows'));
    }

    public function start_quiz(Request $request)
    {
    	$body_class = "sidebar wizard transition-support webkit";
        $quizzes = [];

      if(Auth::guard('customer')->check() && session()->has('gender')){
        $quizzes = Quiz::where('user_id', Auth::guard('customer')->id())->where('gender', session('gender'))->get();
      } elseif(Auth::guard('customer')->check() && !session()->has('gender')) {
        $quizzes = Quiz::where('user_id', Auth::guard('customer')->id())->get();
      }
      if($request->has('product')){
        session()->put('product_id', $request->product);
      }

      
    	return view('frontend.quiz.start_quiz', compact('body_class', 'quizzes'));
    }

    public function setQuiz(Request $request)
    {
      session()->put('without_quiz', 1);
      session()->put('quiz', 1);
      session()->put('checkout_quiz_id', $request->exist_quiz);

        $quiz_ = Quiz::find($request->exist_quiz);
        $quiz = json_decode($quiz_->quiz);

        $form = (array)json_decode(json_encode($quiz));

        $form1 = ['gender'=>session('gender'), 'title'=>$form['title'], 'dob'=>$form['dob'], 'job'=>$form["job"], 'boy'=>$form["boy"], 'kilo'=>$form["kilo"], 'vucut'=>$form["vucut"]];

        if(isset($form['ten_rengi'])){
            $form1['ten_rengi'] = $form['ten_rengi'];
        }

        if(isset($form['sac_rengi'])){
            $form1['sac_rengi'] = $form['sac_rengi'];
        }
        if(isset($form['goz_rengi'])){
            $form1['goz_rengi'] = $form['goz_rengi'];
        }
        session()->put('quiz_1', $form1);

        $form2 = ['üst_beden'=>$form['üst_beden'], "standart_beden"=>$form['standart_beden'] ?? '', 'alt_beden'=>$form['alt_beden'], 'ayakkabi_no'=>$form['ayakkabi_no']];

        if(isset($form['kot_beden'])){
            $form2['kot_beden'] = $form['kot_beden'];
        }
        if(isset($form['takim_elbise_bedeni'])){
            $form2['takim_elbise_bedeni'] = $form['takim_elbise_bedeni'];
        }
        if(isset($form['pantolon_beden'])){
            $form2['pantolon_beden'] = $form['pantolon_beden'];
        }

        session()->put('quiz_2', $form2);

      return redirect('/checkout/plan');
    }

    public function boxes()
    {
        $products = Db::table('products')
    				->join('products_description', 'products.products_id', '=', 'products_description.products_id')
    				->join('products_to_categories', 'products.products_id', '=', 'products_to_categories.products_id')
    				->where('products_to_categories.categories_id', 30)
    				->get();
        $body_class = "sidebar transition-support webkit";
        return view('frontend.boxes', compact('body_class', 'products'));
    }

    public function boxesgender()
    {
        $products = Db::table('products')
                    ->join('products_description', 'products.products_id', '=', 'products_description.products_id')
                    ->join('products_to_categories', 'products.products_id', '=', 'products_to_categories.products_id')
                    ->where('products_to_categories.categories_id', 30)
                    ->get();
        $body_class = "sidebar transition-support webkit";

        $images = DB::table('products_images')->where('products_id', 83)->get();

        return view('frontend.boxesgender', compact('body_class', 'products', 'images'));
    }

    public function profile($id)
    {
        $influencer = Influencer::find($id);
        $products = Db::table('products')
                    ->join('products_description', 'products.products_id', '=', 'products_description.products_id')
                    ->join('products_to_categories', 'products.products_id', '=', 'products_to_categories.products_id')
                    ->where('products_to_categories.categories_id', 30)
                    ->get();

        return view('frontend.profile', compact('influencer', 'products'));

    }

    public function packsionProfile()
    {
      return view('frontend.packsion.profile');
    }

    public function how()
    {
        return view('frontend.how');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function product($id)
    {
        if(request()->has('gender') && request('gender') == 'kadin'){
            session('gender', 'woman');
        }
        if(request()->has('gender') && request('gender') == 'erkek'){
            session('gender', 'man');
        }
      $product = Db::table('products')
    				->join('products_description', 'products.products_id', '=', 'products_description.products_id')
    				->join('products_to_categories', 'products.products_id', '=', 'products_to_categories.products_id')
    				->where('products.products_id', $id)
    				->first();

      $images = DB::table('products_images')->where('products_id', $id)->get();

      return view('frontend.product_detail', compact('product', 'images') );
    }

    public function products()
    {

      $products = Db::table('products')
                    ->join('products_description', 'products.products_id', '=', 'products_description.products_id')
                    ->join('products_to_categories', 'products.products_id', '=', 'products_to_categories.products_id')
                    ->where('products_to_categories.categories_id', 32)
                    ->get();

      //$images = DB::table('products_images')->where('products_id', $id)->get();

      return view('frontend.products', compact('products') );
    }

    public function quick_products($id)
    {
        $product = Db::table('products')
                    ->join('products_description', 'products.products_id', '=', 'products_description.products_id')
                    ->join('products_to_categories', 'products.products_id', '=', 'products_to_categories.products_id')
                    ->where('products.products_id', $id)
                    ->first();

        return view('frontend.quick_view', compact('product'));
    }

    public function infProduct($id)
    {
        $product = Db::table('products')
                    ->join('products_description', 'products.products_id', '=', 'products_description.products_id')
                    ->join('products_to_categories', 'products.products_id', '=', 'products_to_categories.products_id')
                    ->where('products.products_id', $id)
                    ->first();
      return view('frontend.product_detail_inf', compact('product') );
    }


    public function setAddressDefault(Request $request){
        $customer = Auth::guard('customer')->id();

        $address_id = $request->address_id;

        $address = AddressBook::where('customers_id', $customer)->where('default', 1)->first();
        if(count($address) > 0) {
            $address->default = 0;

            $address->save();
        }

        $address = AddressBook::where('address_book_id', $address_id)->first();
        $address->default = 1;
        $address->save();

    }

    public function setQuizDefault(Request $request){
        $customer = Auth::guard('customer')->id();

        $address_id = $request->address_id;

        $address = Quiz::where('user_id', $customer)->where('default', 1)->first();
        if(count($address) > 0) {
            $address->default = 0;

            $address->save();
        }

        $address = Quiz::where('id', $address_id)->first();
        $address->default = 1;
        $address->save();

    }

    public function kvkk()
    {
        return view('kvkk');
    }

    public function riza()
    {
        return view('riza');
    }
    
    public function aydinlatma()
    {
        return view('aydinlatma');
    }

    public function reserve()
    {
        setcookie("packsion_cookie", 1, time()+3600*24*365*100);
    }

    public function preserve()
    {
        session()->put('preserve', 1);
    }

    public function sendContact(Request $request)
    {

        $customer = '';
        Mail::send('emails.contact', ['data'=> $_POST ], function ($m) use ($customer) {
                    $m->from('info@packsion.com', 'Packsion');

                    $m->to('info@packsion.com', 'Packsion')->subject('Yeni İletişim Bildirimi');
                });

        session()->flash('success', 1);

        return back();
    }

    public function oauth($id)
    {
        $user = Customer::find($id);

        Auth::guard('customer')->login($user);

        return back();
    }
}
