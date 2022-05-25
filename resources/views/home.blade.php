@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">Selamat Datang!</div>

                <div class="panel-body">
                    <div class="row">
                        {{-- <div class="col-md-3 text-center">
                            <h1>{{ $questions }}</h1>
                            questions in our database
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $users }}</h1>
                            users registered
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $quizzes }}</h1>
                            quizzes taken
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ number_format($average, 2) }} / 10</h1>
                            average score
                        </div> --}}
                    </div>
                </div>
            </div>
            <a href="{{ route('tests.index') }}" class="btn btn-success">Ayo Mulai Kuis!</a>

            <a href="carakan">Carakan</a>
            <a href="aksaraangka">Aksara Angka</a>
            <a href="aksaramurda">Aksara Murda</a>
            <a href="sandhangan">Sandhangan</a>
            <a href="aksararekan">Aksara Rekan</a>
            <a href="pasangan">Pasangan</a>

        </div>
    </div>
@endsection
