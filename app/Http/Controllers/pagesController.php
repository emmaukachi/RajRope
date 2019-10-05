<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
    	return view ('pages.home');
	}

    public function about()
    {
    	return view ('pages.about');
	}
    
    public function product()
    {
    	return view ('pages.product');
    }
    
    public function contact()
    {
    	return view ('pages.contact');
	}

    public function faq()
    {
    	return view ('pages.faq');
    }
    
    public function join()
    {
    	return view ('pages.join');
    }
    
    public function services()
    {
    	return view ('pages.services');
	}
}
