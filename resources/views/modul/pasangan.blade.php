@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('quickadmin/css/utama.css') }}" >
@section('content')
    <style>
        a{
         text-decoration: none;
         color: white;
        }
     </style>

<div class="row" style="text-align: left; margin-left:5%; margin-bottom:2%;">
    <div class="col-md-2">
        <a href="home"><img src="img/kembali.png" height="40" width="40" /> </span></a>
        
    </div>
    <div class="col-md-7">
        <h1 class="namalevel">Pasangan</h1>
    </div>
</div>
    <div class="row" style="margin-top: 10%;" >
        <div class="col-md-12">
            <div id="bungkus">
        
                    <a class="kartu2" href="pasanganlevel1">Pasangan Level 1</a>
                
                    <a class="kartu2" href="pasanganlevel2">Pasangan Level 2</a>
                

            </div>
        </div>
    </div>
@endsection



