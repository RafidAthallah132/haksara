
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
            <h1 style="font-family: poppins; font-weight:bold; color: #8E3434;">Aksara Murda</h1>
        </div>
</div>
    <div class="row" style="margin-top: 10%;" >
        <div class="col-md-12">
            <div id="bungkus">
        
                    <a class="kartu2" href="materiaksaramurda">Materi</a>
                
                    <a class="kartu2" href="latihansoalaksaramurda">Latihan Soal</a>
                
                    <a class="kartu2" href="{{ route('tests.index') }}">Kuis</a>
            
            </div>
        </div>
    </div>
@endsection

