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

class HomeController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

 
     
    public function index()
    {
        return view('home');
    }
}
