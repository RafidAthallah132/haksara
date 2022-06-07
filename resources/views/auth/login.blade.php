@extends('layouts.auth')

<link rel="stylesheet" href="{{ asset('quickadmin/css/login.css') }}" >

@section('content')
<style>
    
</style>
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
                    <label class="control-label labelin">Email</label>
                    <div class="">
                        <input type="email" class="editin" name="email" value="{{ old('email') }}">
                    </div>
               

                    <div class="form-group">
                        <label class="control-label labelin">Password</label>
    
                        <div class="">
                            <input type="password"  class="editin" name="password">
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
                            <button type="submit" class="tombollogin">
                                Login
                            </button> <br>
                            <p style="text-align: center; font-family:poppins;"> atau 
                                <a href="{{ route('auth.register') }}" style="font-weight: bold; text-decoration:none;"> Daftar </a> 
                            </p>
                        </div>
                    </div>
                </form>
        </div>
      </div>
</div>

   <br>

@endsection
