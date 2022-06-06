{{-- @extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <a href="home"><img src="img/kembali.png" height="40" width="40" /></a>
            <a href="sandhanganlevel1">sandhangan Level 1</a>
            <a href="sandhanganlevel2">sandhangan Level 2</a>
        </div>
    </div>
@endsection --}}

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
            <h1 style="font-family: poppins; font-weight:bold; color: #8E3434;">Sandhangan</h1>
        </div>
    </div>
    <div class="row" >
        <div class="col-md-12">
            <div id="bungkus">
                    <a class="kartu2" href="sandhanganlevel1">Sandhangan Level 1</a>
                    <a class="kartu2" href="sandhanganlevel2">Sandhangan Level 2</a>
            </div>
        </div>
    </div>
@endsection




