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
            <h1 style="font-family: poppins; font-weight:bold; color: #8E3434;">Selamat datang {{ Auth::user()->name }} !</h1>
        </div>
</div>
    <div class="row" >
        <div class="col-md-12">
            <div id="bungkus">
                <div class="kartu">
                    <div>
                        <a href="aksaraangka" id='modul2' >Aksara Angka</a> 
                    </div>
                </div>
                <div class="kartu">
                    <a id='modul2' href="aksaramurda">Aksara Murda</a>
                </div>
                <div class="kartu">
                    <a id="modul2" href="sandhangan">Sandhangan</a>
                </div>
                <div class="kartu">
                    <a id="modul2" href="carakan">Carakan</a>
                </div>
                <div class="kartu">
                    <a id="modul2" href="aksaraswara">Aksara Swara</a>
                </div>
                <div class="kartu">
                    <a id="modul2" href="pasangan">Pasangan</a>
                </div>
            </div>
        </div>
    </div>
@endsection
