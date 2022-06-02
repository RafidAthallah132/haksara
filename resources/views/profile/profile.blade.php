@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('quickadmin/css/utama.css') }}" >
@section('content')
<div class="card" style="margin: 40px;padding:20px;">
    <div class="card-body">
        <p style="font-size: 30px;font-family: Poppins" class="card-title text-center">Profile</P>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-1">
     
        <i class="fa fa-user" aria-hidden="true" style="font-size: 100px; margin-top: 50px;"></i>
        
    </div>
    <div class="col-lg-6">
    
        <table class="table table-borderless">
            <tr>
       <td class="col-md-1"> <p style="font-size: 30px;font-family: Poppins">Name </p> </td>   
        <td><p style="font-size: 30px;font-family: Poppins;margin-left: 5px">{{ Auth::user()->name }}</p></td>
            </tr>
   

            <tr>
                <td class="col-md-1"> <p style="font-size: 30px;font-family: Poppins">Email </p>   </td>
       <td> <p style="font-size: 30px;font-family: Poppins;margin-left: 5px">{{ Auth::user()->email}}</p> </td>
            </tr>
   

    <tr>
        <td class="col-md-1">  <p style="font-size: 30px;font-family: Poppins">Description </p>   </td>
        <td class="col-md-1">  <p style="font-size: 30px;font-family: Poppins;margin-left: 5px">{{ $profile -> description}}</p></td>
    </tr>
</table>

  
    <div class="row">
        <a href={{"profile/edit/".$profile['id']}}>
        <button type="button" class="btn btn-primary btn-lg active" style="border-radius: 10%;">Edit Profile</button>
        </a>    
        
    </div>
    </div>
    </div>
    </div>
</div>
@endsection