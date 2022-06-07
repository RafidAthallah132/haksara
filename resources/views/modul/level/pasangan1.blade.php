
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
    <a href="pasangan"><img src="img/kembali.png" height="40" width="40" /> </span></a>
    
</div>
<div class="col-md-7">
    <h1 class="namalevel">Pasangan Level 1</h1>
</div>
</div>
<div class="row" style="margin-top: 10%;" >
    <div class="col-md-12">
        <div id="bungkus">
    
                <a class="kartu2" href="materipasangan1">Materi</a>
            
       
                <a class="kartu2" href="latihansoalpasangan1">Latihan Soal</a>
            
                <a class="kartu2" href="{{ route('tests.index') }}">Kuis</a>
        
        </div>
    </div>
</div>

@endsection



