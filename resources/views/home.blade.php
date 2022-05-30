@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('quickadmin/css/utama.css') }}" >
@section('content')
<style>
   a{
    text-decoration: none;
    color: white;
   }
</style>
    <div class="row" >
        <div class="col-md-12">
            <div id="bungkus">
                <div class="kartu">
                    <a  id='kartu-link' style="">Aksara Angka</a></div>
                <div class="kartu"><a id='modul2' href="aksaramurda">Aksara Murda</a></div>
                <div class="kartu"><a  href="sandhangan">Sandhangan</a></div>
                <div class="kartu"><a  href="aksararekan">Aksara Rekan</a></div>
                <div class="kartu"><a  href="pasangan">Pasangan</a></div>
            </div>
        </div>
    </div>

    
@endsection
