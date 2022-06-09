@extends('layouts.auth')

<link rel="stylesheet" href="{{ asset('quickadmin/css/register.css') }}" >

@section('content')
<div class="col-md-6 col-md-offset-3" >
      <div class="bungkus" >
        <div class="isi-bungkus">
            <p id="masok">Daftar</p>
            <br>
            <form class="form" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label labelin">Name</label>
                        <div class="">
                            <input maxlength="255" type="text" class="editin" placeholder="Isi namamu disini ya..." name="name" value="{{ old('name') }}" required autofocus>
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="control-label labelin">E-Mail Address</label>
                        <div class="">
                            <input type="email" class="editin" placeholder="Email" name="email" value="{{ old('email') }}" required >
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="control-label labelin">Password</label>
                        <div class="">
                            <input type="password" minlength="6" class="editin" placeholder="password" name="password" required >

                            @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <label class="control-label labelin">Confirm Password</label>
                        <div class="">
                            <input minlength="6" type="password" class="editin" placeholder="Confirm your password" name="password_confirmation" required >

                            @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group">
                            <div class="">
                                <button type="submit" class="tombolregister">
                                    Daftar
                                </button> <br>
                                <p style="text-align: center; font-family:poppins;"> atau 
                                    <a href="/login" style="font-weight: bold; text-decoration:none;"> masuk </a> 
                                </p>
                            </div>
                        </div>
                </form>
        </div>
</div>
   <br>
    
@endsection
