@extends('layouts.app')

@section('content')

    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="{{url('home/logininfo')}}" class="login100-form validate-form" method="get">
                        {{ csrf_field() }}
                        <h1>Login Form</h1>
                     
                        <div>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary submit" >Log in</button>
                            <a class="reset_pass" href="{{url('home/forgotpassword') }}"><b>forgot your password?</b></a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                          

                            <div class="clearfix"></div>
                            <br />

                           
                          </div>
                </form>
              </section>
            </div>

            
        </div>
    </div>
@endsection
