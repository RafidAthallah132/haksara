@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('quickadmin/css/utama.css') }}" >
@section('content')
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-1">
     
        <i class="fa fa-user" aria-hidden="true" style="font-size: 100px; margin-top: 50px;"></i>
        
    </div>
    <div class="col-lg-6">
    <div class="row">
<p style="font-size: 30px;font-family: Poppins">{{ Auth::user()->name }}</p>
    </div>
    <div class="row">
        <p style="font-size: 20px;font-family: Poppins">{{ Auth::user()->email}}</p>
    </div>
    <div class="row">

        <p style="font-size: 20px;font-family: Poppins">{{ $profile -> description}}</p>
        

    </div>
    <div class="row">
        <button type="button" class='btn btn-sm btn-primary' style="border-radius: 10%;">Edit Profile</button>
        
    </div>
    </div>
</div>
@endsection