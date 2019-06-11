@extends('layouts.app')

@section('content')

  <body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>
                  @if (count($errors) > 0)
                    <div class="alert alert-danger">
                            Upload Validation Error<br><br>
                              <ul>
                                  @foreach ($errors->all() as $error)
                                   <li>{{ $error }}</li>
                                  @endforeach
                             </ul>
                    </div>
                @endif
               @if ($message = Session::get('success'))
               <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                       <strong>{{ $message }}</strong>
               </div>
               <img src="/images/{{ Session::get('path') }}" width="300" />
               @endif
                <div class="card-body">
                    <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                        <div class="form-group">
                            @csrf
                            <label class="label">Post Title: </label>
                            <input type="text" name="title" class="form-control" required/>
                        </div>
                        <div class="form-group">
                            <label class="label">Select Image</label>
                            <input type="file" name="select_file" />
                        </div>
                        <span class="text-muted" style="color:red;">jpg, png, gif</span>
                  
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
@endsection



