@extends('layouts.app')



@section('content')
<div class="right_col" role="main">
    <div class="clearfix">
    </div>
  
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6 col-md-offset-3">
            <div class="x_panel">
                <div class="x_title">
                
                    <div class="clearfix">
                    </div>
                </div>
                <div class="x_content">
                    <div class="alert alert-success alert-dismissible fade in" id="sucMsgDiv" role="alert" style="display:none;">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <span class="sucmsgdiv">
                        </span>
                    </div>
                    <div class="alert alert-danger alert-dismissible fade in" id="failMsgDiv" role="alert" style="display:none;">
                        <button aria-label="Close" class="close" data-dismiss="alert" type="button">
                            <span aria-hidden="true">
                                ×
                            </span>
                        </button>
                        <span class="failmsgdiv">
                        </span>
                    </div>
              <form method="get" action="{{url('home/signup')}}"> 
                  
                                   
                
                   <div>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Username" required="" />
                  </div><br/>
                  <div>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="" />
                  </div><br/>
                  <div>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" />
                  </div><br/>
                   <div>
                    <input type="password" class="form-control" name="cpassword" id="cpassword" placeholder="Confirm Password" required="" onblur="checkPassCpass1();" />
                    <span id="passcpass1"></span>
                  </div><br/>
                  <div>
                   <button type="submit" class="btn btn-default submit" >Register</button>
                  </div>

                  <div class="clearfix"></div>

               
                </form>
              </div>
            </div>
        </div>
    </div>
        </div>
       
    </div>

</div>
@endsection