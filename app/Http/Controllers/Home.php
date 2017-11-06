<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;

class Home extends Controller
{
	function __construct(Request $request) {
		app()->setLocale($request->session()->get('user_language'));
	}


    public function index(Request $request) {
		//return view('home.index');
		// echo $request->session()->get('user_logged');
		// echo $request->session()->get('user_type');
		// echo $request->session()->get('user_language');
		//app()->setLocale('mr');

     	$users = DB::select('select * from tbl_district');
      	return view('home.index',['district'=>$users]);
		echo app()->getLocale();
	}


}
