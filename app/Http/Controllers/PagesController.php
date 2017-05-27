<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function contact()
    {
    	$header =  'Nagłówek kontakt';
    	$date = '22/05/2017';
    	$visited = 1000;
    	return view('pages.contact', compact('header', 'date','visited' ));
    }
    public function about()
    {
    	return view('pages.about');
    }
}