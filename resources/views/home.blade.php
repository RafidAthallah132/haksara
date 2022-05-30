@extends('layouts.app')
    <link rel="stylesheet" href="{{ asset('quickadmin/css/utama.css') }}" >
@section('content')
<style>
   a{
    text-decoration: none;
    color: white;
   }
</style>
    <div class="row" style="margin-top: 10%">
        <div class="col-md-10">
            <div id="bungkus">
                <div class="kartu"><a style="text-decoration: none;" href="carakan">Carakan</a></div>
                <div class="card"><a  href="aksaraangka">Aksara Angka</a></div>
                <div class="card"><a  href="aksaramurda">Aksara Murda</a></div>
                <div class="card"><a  href="sandhangan">Sandhangan</a></div>
                <div class="card"><a  href="aksararekan">Aksara Rekan</a></div>
                <div class="card"><a  href="pasangan">Pasangan</a></div>
            </div>
        </div>
    </div>

    
@endsection
