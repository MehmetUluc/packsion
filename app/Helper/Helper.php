<?php
namespace App\Helper;
use App\Product;
use DB;
use Auth;

class Helper
{


  public static function getProductName($id){
    $product = Product::where('products_id', $id)->with('desc')->first();

    return $product['desc']->products_name;
  }

  public static function getProductPrice($id){
    $product = Product::where('products_id', $id)->with('desc')->first();

    return $product->products_price;
  }

  public static function getPage($slug){
    $page = DB::table('pages')->where('slug', $slug)->join('pages_description', 'pages.page_id', '=', 'pages_description.page_id')->first();
    return $page;
  }

  public static function countOfQuiz()
  {
    $id = Auth::guard('customer')->id();

    $count = DB::table('quizzes')->where('user_id', $id)->count();

    return $count;
  }


}
