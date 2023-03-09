<?php

namespace App\Http\Controllers;

use App\Models\User_frontend;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
//connect model database user
use App\Models\User;
//libary import covert password can't know
use Illuminate\Support\Facades\Hash;
//libary for login and logout
use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
   public function register(){
       return view('Backend.register');
   }
   public function register_submit(Request $request){
        $request ->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);
        $user = new User();
        $answer = $user::create([
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request->password),
        ]);
        if($answer){
            return back() -> with('success', 'Your Account Create Successfuly');
        }else{
            return back() -> with('fail', 'Your Account Create Unsuccessfuly');
        }
   }
   public function login_user(){
       return view('Backend.login');
   }
   public function login_submit(Request $request){
       $request ->validate([
           'password' => 'required|min:8',
       ]);
       if(Auth::attempt(['email'=>$request->email, 'password' => $request -> password])){
           return redirect('admin/dashboard');
       }
       else if (Auth::attempt(['name'=>$request->email, 'password' => $request -> password])){
            return redirect('admin/dashboard');
       }
       return back() -> with('fail', 'Wrong Password or Email');
   }
   public function form_user(){
       return view('Backend.form');
   }
   public function table_user(){
       return view('Backend.table');
   }
   public function modal_user(){
       return view('Backend.modal');
   }
   public function logout_user(){
       Auth::logout();
       return redirect('admin/login');
   }
}
