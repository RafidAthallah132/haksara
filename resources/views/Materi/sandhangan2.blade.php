@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <h1 class="text-center">Sandhangan</h1>
                <p>
                    sandangan adalah simbol atau penanda yang akan mengubah vokal dasar pada aksara carakan, karena pada dasarnya
                    seluruh carakan hanya bervokal a. Aksara akan berubah vokalnya jika ditulis dengan sandhangan yang sesuai vokal masing-masing.
                </p>
                <table class="table table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th>Tanda</th>
                            <th>Nama</th>
                            {{-- <th>Pelafalan</th> --}}
                            <th>Penjelasan</th>
                            <th>Dibaca</th>
                        </tr>
                    </thead>
                    <tbody>

                        <a href="sandhanganlevel2"><img src="img/kembali.png" height="40" width="40" /></a>

                        <tr>
                            {{-- Audio letakkan di public/audio --}}
                            <td>꧉</td>
                            <td>Pada Lungsi</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play1()">Audio</button>
                                <audio id="audio1" src="{{ asset('audio/pa.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>tanda titik</td>
                            <td>.</td>
                        </tr>

                        <tr>
                            <td>꧇꧇</td>
                            <td>Pada pangkat</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play2()">Audio</button>
                                <audio id="audio2" src="{{ asset('audio/dha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Merupakan pemisah antara carakan dengan aksara angka pada 1 kalimat</td>
                            <td>Tidak dibaca</td>
                        </tr>
                        
                        <tr>
                            <td>ꦥꦿ</td>
                            <td>Cakra ra</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play3()">Audio</button>
                                <audio id="audio3" src="{{ asset('audio/ja.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>mengganti huruf vokal dengan "ra"</td>
                            <td>pra</td>
                        </tr>

                        <tr>
                            <td>ꦥ꧀ꦭ</td>
                            <td>Cakra la</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play4()">Audio</button>
                                <audio id="audio4" src="{{ asset('audio/ya.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>mengganti huruf vokal dengan "la"</td>
                            <td>pla</td>
                        </tr>

                        <tr>
                            <td>ꦥ꧀ꦮ</td>
                            <td>Cakra wa</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play5()">Audio</button>
                                <audio id="audio5" src="{{ asset('audio/nya.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>mengganti huruf vokal dengan "wa"</td>
                            <td>pwa</td>
                        </tr>

                        <tr>
                            <td>ꦥꦾ</td>
                            <td>pengkal</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play6()">Audio</button>
                                <audio id="audio6" src="{{ asset('audio/ma.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>mengganti huruf vokal dengan "ya"</td>
                            <td>pya</td>
                        </tr>

                        <tr>
                            <td>ꦉ</td>
                            <td>pa ceret</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play7()">Audio</button>
                                <audio id="audio7" src="{{ asset('audio/ga.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>khusus carakan re dengan suara e mirip degan e pada "remuk, renang, dsb"</td>
                            <td>re</td>
                        </tr>

                        <tr>
                            <td>ꦊ</td>
                            <td>nga lelet</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play8()">Audio</button>
                                <audio id="audio8" src="{{ asset('audio/ba.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>khusus carakan le dengan suara e mirip degan e pada "lemah, letih, dsb"</td>
                            <td>le</td>
                        </tr>

                        <tr>
                            <td>꧋</td>
                            <td>pada adeg-adeg</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play9()">Audio</button>
                                <audio id="audio9" src="{{ asset('audio/tha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>diletakkan di awal kalimat aksara jawa</td>
                            <td>Tidak dibaca</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        {{-- <script>
            function play1() {
              var audio = document.getElementById("audio1");
              audio.play();
            }

            function play2() {
              var audio = document.getElementById("audio2");
              audio.play();
            }

            function play3() {
              var audio = document.getElementById("audio3");
              audio.play();
            }

            function play4() {
              var audio = document.getElementById("audio4");
              audio.play();
            }

            function play5() {
              var audio = document.getElementById("audio5");
              audio.play();
            }

            function play6() {
              var audio = document.getElementById("audio6");
              audio.play();
            }

            function play7() {
              var audio = document.getElementById("audio7");
              audio.play();
            }

            function play8() {
              var audio = document.getElementById("audio8");
              audio.play();
            }

            function play9() {
              var audio = document.getElementById("audio9");
              audio.play();
            }

            function play10() {
              var audio = document.getElementById("audio10");
              audio.play();
            }
        </script> --}}
    @endsection
