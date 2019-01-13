<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Converter;

class PdfController extends Controller
{
    public function htmlToPdf($id)
    {
    	Converter::make('http://packsion.com/admin/shipments/quiz/ ' .$id . '/text')
	    ->toPdf()
	    ->download('google.pdf', true);
    }

    public function htmlToPdf2($id)
    {
    	Converter::make('http://packsion.com/admin/quiz/quiz/' .$id . '/text')
	    ->toPdf()
	    ->download('google.pdf', true);
    }
}
