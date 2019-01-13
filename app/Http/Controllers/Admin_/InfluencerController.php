<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Influencer;

class InfluencerController extends Controller
{
    public function index()
    {
    	$influencers = Influencer::all();
    	$title = array('pageTitle' => 'Influencers');

    	return view('admin.influencer.index', ,$title)->with('influencers', $influencers);
    }

    public function create()
    {
    	$title = array('pageTitle' => 'Create Influencers');
    	return view('admin.influencer.create', $title);
    }

    public function store(Request $request)
    {

    	$influencer = new Influencer;
    	if($request->has('photo')){
    		$path = $request->photo->store('images');
    		$influencer->photo = $path;
    	}
    	$influencer->name = $request->name;
    	$influencer->bio = $request->bio;
    	$influencer->video = $request->video;
    	$influencer->video_kapak = $request->video_kapak;

    	try {
    		$influencer->save();
    		return back()
    	} catch(Exception $e) {
    		return back()->with('error', 'Kaydedilemedi');
    	}
    }

    public function edit($id, Request $request)
    {
    	$influencer = Influencer:find($id);

    	return view('admin.influencer.edit', $title)->with('influencer', $influencer);
    }

    public function update($id, Request $request)
    {
    	$influencer = Influencer:find($id);
    	if($request->has('photo')){
    		$path = $request->photo->store('images');
    		$influencer->photo = $path;
    	}
    	$influencer->name = $request->name;
    	$influencer->bio = $request->bio;
    	$influencer->video = $request->video;
    	$influencer->video_kapak = $request->video_kapak;

    	try {
    		$influencer->save();
    		return back()
    	} catch(Exception $e) {
    		return back()->with('error', 'Kaydedilemedi');
    	}
    }

    public function delete($id)
    {
    	Influencer::destroy($id);
    	return back();
    }
}
