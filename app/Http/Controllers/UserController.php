<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request as Request;

class UserController extends Controller
{
	public function getIndex(){

		return view('index');
	}

	public function getProfileIndex(){
		$user = Auth::user();
		return view('passenger.profile', ['user' => $user]);
	}

	public function postUserUpdate(Request $request){
		$this->validate($request, [
			'firstname' => 'required|min:5|max:240',
			'lastname' => 'required|min:5|max:240',
			'email' => 'required|min:5'
		]);

		$user = Auth::user();

		$user->firstname = $request->input('firstname');
		$user->lastname = $request->input('lastname');
		$user->email = $request->input('email');
		$user->phone = $request->input('phone');
		$user->gender = $request->input('gender');
		$user->birthdate = $request->input('birthdate');

		$user->save();

		return redirect()->route('passenger.profile')->with('info', 'User Edited');

	}
}
