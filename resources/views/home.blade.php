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
            <h1 style="font-family: poppins; font-weight:bold; color: #8E3434; font-size: 30px;">Selamat datang <u>{{ Auth::user()->name }} </u> !</h1>
        </div>
</div>
    <div class="row" >
        <div class="col-md-12">
            <div id="bungkus">
                    <a href="aksaraangka" class="kartu">Aksara Angka</a> 
                    <a class="kartu" href="aksaramurda">Aksara Murda</a>
                    <a class="kartu" href="sandhangan">Sandhangan</a>
                    <a class="kartu" href="carakan">Carakan</a>
                    <a class="kartu" href="aksaraswara">Aksara Swara</a>
                    <a class="kartu" href="pasangan">Pasangan</a>
            </div>
        </div>
    </div>
@endsection
