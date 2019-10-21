<?php

namespace App\Http\Controllers;

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
		//     // Laravel validation
		//     $this->validate($request,[
		//         'name'=>'required',
		//         'email'=>'required',
		//         'subject'=>'required',
		//         'message'=>'required'
		// ]);
		//   $team =new Team;
		//   $team->team_name = $request->team_name;
		//   $team->team_description = $request->team_description;
		//   $team->department_id = $request->department_id;
		//   $permission->save();
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
}
