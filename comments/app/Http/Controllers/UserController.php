<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Censer;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use DB;
use Mail;
use Config;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Redirect;
use Session;
use Validator;
use Illuminate\Support\Facades\Input;
use URL; 

class UserController extends Controller
{
    public function login(){
            return view('users.login');
    }
    public function loginuser(Request $request){
            $rules = array(
        
            'email' => 'required|email',                      
            'password' => 'required', 
        );
       $validator = Validator::make($request->all(), $rules);
           if ($validator->fails()) {
            
            if ($request->ajax()) {
                return response()->json($validator->getMessageBag(), 301);
            } else {
                return redirect()->back()->withErrors($validator)
                    ->withInput();
            }
            $this->throwValidationException(
                $request, $validator
            );
        }else{

            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );
            if (Auth::validate($userdata)) {    
           
                if (Auth::attempt($userdata)) {
                    
                   //echo "successs";die();
                   
                   return Redirect::to('post/posts')->with('message', 'You are now logged in!');
                       
                }
            }else{
                  if ($request->ajax()) {
                    $validator->errors()->add("login_error", "Username or password doesn't match");
                    return response()->json($validator->getMessageBag(), 301);
                } 
                else
                {
                  return redirect()->to('/');
                }
            }
       }
}

public function register(){

  return view('users.createregistration');
    }

    public function signup(Request $request){
         $user=new User;
         $rules = array(
            'name' => 'required',
            
            'email' => 'required|email',                      
            'password' => 'required', 
            
        );

       $validator = Validator::make($request->all(), $rules);
       
         if ($validator->fails()) {
         
            if ($request->ajax()) {
                return response()->json($validator->getMessageBag(), 301);
            } else {
                return redirect()->back()->withErrors($validator)
                    ->withInput();
            }
            $this->throwValidationException(
                $request, $validator
            );
        }else{

            
            $user->name=Input::get('name');
            
            $user->email=Input::get('email');
            $user->password=Hash::make(Input::get('password'));
            
            $user->save();
            return redirect()->back();
            //return redirect()->to('/');
            }


    }


     public function dashboard(){
             return view('censors.post');
         }
     public function logout(){
        Auth::logout();
        return redirect()->to('/')->with('message', 'Your are logged out!');
      }
}
