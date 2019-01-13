<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slideshow;

class SlideshowController extends Controller
{
    public function index()
    {
    	$influencers = Slideshow::all();
    	$title = array('pageTitle' => 'Slideshows');

    	return view('admin.slide.index', $title)->with('influencers', $influencers);
    }

    public function create()
    {
    	$title = array('pageTitle' => 'Create Slideshow');
    	return view('admin.slide.create', $title);
    }

    public function store(Request $request)
    {

    	$influencer = new Slideshow;
    	if($request->hasFile('image')){
            $image = $request->image;
            $fileName = time().'.'.$image->getClientOriginalName();
            $image->move('resources/assets/images/product_images/', $fileName);
            $influencer->image = 'resources/assets/images/product_images/'.$fileName;
        }

        if($request->hasFile('tablet')){
              $image = $request->tablet;
              $fileName = time().'.'.$image->getClientOriginalName();
              $image->move('resources/assets/images/product_images/', $fileName);
              $influencer->tablet = 'resources/assets/images/product_images/'.$fileName;
          }

        $influencer->title = $request->name;
        $influencer->top_label = $request->top_label;
        $influencer->text = $request->text;
      	$influencer->buttons = $request->buttons;
    	//$influencer->video_kapak = $request->video_kapak;

    	try {
    		$influencer->save();
    		return redirect('/admin/slideshows');
    	} catch(Exception $e) {
    		return back()->with('error', 'Kaydedilemedi');
    	}
    }

    public function edit($id, Request $request)
    {
    	$influencer = Slideshow::find($id);

        $title = array('pageTitle' => 'Edit Slideshow');

    	return view('admin.slide.edit', $title)->with('influencer', $influencer);
    }

    public function update($id, Request $request)
    {
    	$influencer = Slideshow::find($id);
    	if($request->hasFile('image')){
            $image = $request->image;
            $fileName = time().'.'.$image->getClientOriginalName();
            $image->move('resources/assets/images/product_images/', $fileName);
            $influencer->image = 'resources/assets/images/product_images/'.$fileName;
        }

        if($request->hasFile('tablet')){
              $image = $request->tablet;
              $fileName = time().'.'.$image->getClientOriginalName();
              $image->move('resources/assets/images/product_images/', $fileName);
              $influencer->tablet = 'resources/assets/images/product_images/'.$fileName;
          }

    	$influencer->title = $request->name;
    	$influencer->top_label = $request->top_label;
    	$influencer->text = $request->text;
    	$influencer->buttons = $request->buttons;
    	//$influencer->video_kapak = $request->video_kapak;

    	try {
    		$influencer->save();
    		return redirect('/admin/slideshows');
    	} catch(Exception $e) {
    		return back()->with('error', 'Kaydedilemedi');
    	}
    }

    public function delete($id)
    {
    	Slideshow::destroy($id);
    	return back();
    }
}
