<?php
namespace App\Http\Controllers;

use Validator;
use Input;
use Auth;
use Hash;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class UserController extends BaseController{
	public function index(){
		$data = DB::table('user')->get();
		return view('content.user.index', ['data' => $data]);
	}
	public function add_user_get(){
		return view('content.user.add');
	}
	public function add_user_post(){
		$rules = array(
        	'image' => 'image'
    		);
		$validator = Validator::make(Input::all(), $rules);
		if($validator->fails()){
			return Redirect::to('add-new-user')->with('message', 'Error: The provided file was not an image!');
		}
		$user = DB::table('user');

		if(Input::file()){
           	$file = Input::file('image');
            $name = '/profilepics/'.time(). '-' .$file->getClientOriginalName();
            $file->move(public_path().'/profilepics/', $name);

		}else{
			$name = '';
		}
		$data = array(
				'name' => Input::get('name'),
				'user' => Input::get('email'),
				'password' => Hash::make(Input::get('password')),
				'salt' => Input::get('password'),
				'image'=> $name,
				'level'=> Input::get('level'),
			);

		$insert = DB::table('user')->insert($data);
		if($insert){
			return Redirect::to('/user')->with('flash_success','Add User Successful!');
		}else{
			return Redirect::to('/user')->with('flash_error','Add User Fail!');
		}
	}


	public function delete_user($id){
		$user = DB::table('user');
		$user->delete($id);	
		return Redirect::route('user')->with('flash_success', 'Delete User Successful!');
	}

	public function edit_user_get($id){
		$user = DB::table('user')->where('id' , '=' ,$id )->first();
		// echo $user->name;
		return view('content.user.edit')->with('data', $user);

	}
	

}
