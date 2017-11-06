<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

class Login extends Controller
{
    //
    public function index() {
		return view('login.index');
	}

	public function validation(Request $request) {
    	//print_r($request->all());
      	$this->validate($request,[
         	'username'=>'required|max:8',
         	'password'=>'required',
         	'language'=>'required'
      	]);
		
      	$users = DB::select("select * from tbl_login where username=? and password=?", [$request->username, $request->password]);
      	
      	if(count($users) > 0) {
      		$request->session()->put('user_logged', true);
      		$request->session()->put('user_language', $request->language);
      		$request->session()->put('user_type', $users[0]->usertype);
      		return redirect('/home');
      	} else {
			return redirect('/');
      	}
	}
}
