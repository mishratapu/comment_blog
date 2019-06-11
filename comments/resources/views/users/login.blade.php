@extends('layouts.app')
@section('content')

	<div>
      	<a class="hiddenanchor" id="signup"></a>
      	<a class="hiddenanchor" id="signin"></a>

      	<div class="container">
	        <div class="animate form login_form">
	        	<center>

	          	<section class="login_content">
             		<form action="{{url('user/loginuser')}}" class="login100-form validate-form" method="get" >
          				{{ csrf_field() }}
			            <h1>Login Form</h1>
			        
			            <div>
			                <input type="text" name="email" id="email" class="form-control" placeholder="Username" required="" />
			            </div>
			            <div>
			                <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="" />
			            </div>
			            <div class="clearfix"></div>
			            <br><div>
			                <button type="submit" class="btn btn-primary submit" >Log in</button>
			                <a class="reset_pass" href="{{url('user/forgotpassword') }}"><b>forgot your password?</b></a>
			            </div>

			            <div class="clearfix"></div>

			            <div class="separator">
			         
			          <div class="separator">
			                <p class="change_link"><b>New to site?</b>
			                  <a href="{{url('user/register') }}" style="color:blue;"> Register Your Details </a>
			                </p>

			                <div class="clearfix"></div>
			                <br />
			              </div>
	            </form>
	            </section>
	            </center>
	       </div>
	        </div>
	    </div>
@endsection
