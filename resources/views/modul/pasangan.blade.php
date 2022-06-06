@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('quickadmin/css/utama.css') }}" >
@section('content')
    <style>
        a{
         text-decoration: none;
         color: white;
        }
     </style>

    <div class="row" style="text-align: left; margin-left:10%; margin-bottom:2%;">
        <div class="col-md-12">
            <h1 style="font-family: poppins; font-weight:bold; color: #8E3434;">Pasangan</h1>
        </div>
</div>
    <div class="row" >
        <div class="col-md-12">
            <div id="bungkus">
        
                    <a class="kartu2" href="pasanganlevel1">Pasangan Level 1</a>
                
                    <a class="kartu2" href="pasanganlevel2">Pasangan Level 2</a>
                

            </div>
        </div>
    </div>
@endsection



