<?php

namespace App\Http\Controllers;
use App\Contact;
use App\Customer;
use Illuminate\Http\Request;

class pagesController extends Controller {
	public function index() {
		return view('pages.home');
	}

	public function about() {
		return view('pages.about');
	}

	public function product() {
		return view('pages.product');
	}

	public function contact() {
	
		return view('pages.contact');
	}

	public function faq() {
		return view('pages.faq');
	}

	public function join() {
		return view('pages.join');
	}

	public function services() {
		return view('pages.services');
	}
	public function createContact(Request $request) {
           $this->validate($request,[
		   		 'name'=>'required',
		         'email'=>'required',
		         'subject'=>'required',
		         'message'=>'required'
		 ]);
		   $contact =new Contact;
		   $contact->name = $request->name;
		   $contact->email = $request->email;
		   $contact->subject = $request->subject;
		   $contact->message = $request->message;
		  $contact->save();
		  return back()->with('success','Your message has been sent. Thank you!');
	}
	public function createCustomer(Request $request) {
				 $this->validate($request,[
				 'name'=>'required',
			  	 'email'=>'required',
			  	 'contact'=>'required',
			  	 'address'=>'required'
	  ]);
		$Customer =new Customer;
		$Customer->name = $request->name;
		$Customer->email = $request->email;
		$Customer->contact = $request->contact;
		$Customer->address = $request->address;
	   $Customer->save();
	   return back()->with('success','Your registration was successful. Thank you!');
 }
}
