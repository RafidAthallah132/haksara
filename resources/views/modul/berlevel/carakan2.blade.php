@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <a href="carakan"><img src="img/kembali.png" height="40" width="40" /></p>
                <a href="matericarakan2">Materi</a>
                <a href="latihansoalcarakan2">Latihan Soal</a>
                <a class="kartu2" href="{{ route('tests.index') }}">Kuis</a>
        </div>
    </div>
@endsection
