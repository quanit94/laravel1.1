<?php
namespace App\Http\Controllers;

use Validator;
use Input;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HomeController extends BaseController{
	
	public function showLogin(){
		return view('auth.index');
	}	

	public function doLogin(){
		$rule = [
			'user' 	=> 'required',
			'password'  => 'required|min:3',
			];
		$validator = Validator::make(Input::all(), $rule);
		$user = [
			'user' => Input::get('email'),
			'password' => Input::get('pass'),
			];
		if(Auth::attempt($user)){
			return Redirect::route('home');
		}else{
			return Redirect::route('login')->with('flash_error', 'Your email or password invalid!');
		}

	}
	public function doLogout(){
		Auth::logout();
		return Redirect::route('login');
	}

	public function index()
	{
		return view('content.index');
	}
}