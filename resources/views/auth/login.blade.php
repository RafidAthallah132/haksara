@extends('layouts.auth')

<link rel="stylesheet" href="{{ asset('quickadmin/css/login.css') }}" >

@section('content')
<div class="col-md-6 col-md-offset-3">
    <div style="display: flex; ">
        <p id="haksara" > Haksara</p>
        <p id='jargon'>Belajar aksara jawa dengan <br>
           <span style="color: #8E3434;"> mudah </span> dan <span style="color: #8E3434;"> menyenangkan </span> </p>
      </div>
      <div class="bungkus" >
        <div class="isi-bungkus">
            <p id="masok">Masuk</p>
            @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were problems with input:
                        <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <br>
            <form class="form" role="form" method="POST" action="{{ url('login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
                    <div class="form-group">
                        <label class="control-label">Email</label>
                        <div class="">
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="control-label">Password</label>
    
                        <div class="">
                            <input type="password" class="form-control" name="password">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="">
                            <label>
                                <input type="checkbox"
                                       name="remember"> Remember me
                            </label>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="">
                            <button type="submit"
                                    class="btn btn-primary">
                                Login
                            </button>
                            <a href="{{ route('auth.register') }}"
                                    class="btn btn-default">
                                Register
                            </a>
                
                        </div>
                    </div>
                </form>
        </div>
</div>

{{-- <div class="row">
    <div class="col-md-8 col-md-offset-3">
        <div style="display: flex; ">
            <p id="haksara" > Haksara</p>
            <p id='jargon'>Belajar aksara jawa dengan <br>
               <span style="color: #8E3434;"> mudah </span> dan <span style="color: #8E3434;"> menyenangkan </span> </p>
          </div> --}}
        {{-- <div class="panel panel-default">
            <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were problems with input:
                        <br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
    
                <form class="form-horizontal"
                      role="form"
                      method="POST"
                      action="{{ url('login') }}">
                    <input type="hidden"
                           name="_token"
                           value="{{ csrf_token() }}">
    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Email</label>
    
                        <div class="col-md-4">
                            <input type="email"
                                   class="form-control" 
                                   name="email"
                                   value="{{ old('email') }}">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <label class="col-md-2 control-label">Password</label>
    
                        <div class="col-md-4">
                            <input type="password"
                                   class="form-control"
                                   name="password">
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="col-md-3 col-md-offset-2">
                            <label>
                                <input type="checkbox"
                                       name="remember"> Remember me
                            </label>
                        </div>
                    </div>
    
                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-2">
                            <button type="submit"
                                    class="btn btn-primary">
                                Login
                            </button>
                            <a href="{{ route('auth.register') }}"
                                    class="btn btn-default">
                                Register
                            </a>
                
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div> --}}
    {{-- </div>
</div> --}}


        
   <br>
    
@endsection
