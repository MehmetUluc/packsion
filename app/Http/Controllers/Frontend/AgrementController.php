<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Product;

class AgrementController extends Controller
{
    public function index(){
      
    	$order_id = session()->get('order_id');
    	$order = Order::find($order_id);
    	$product_id = session()->get('product_id');
    	$product = Product::where('products_id', $product_id)->with('desc')->first();
      return view('frontend.agrement.index', compact('order', 'product'));
    }

    public function form(){
      
    	$order_id = session()->get('order_id');
    	$order = Order::find($order_id);
    	$product_id = session()->get('product_id');
    	$product = Product::where('products_id', $product_id)->with('desc')->first();
      return view('frontend.agrement.form', compact('order', 'product'));
    }
}
