@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome! Here are some numbers about LaraQuiz.</div>
                <a href="pasanganlevel2">Kembali</a>
                ini quiz pasangan level 2
            <a href="{{ route('tests.index') }}" class="btn btn-success">Take a new quiz!</a>
        </div>
    </div>
@endsection
