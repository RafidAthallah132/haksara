@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <h1 class="text-center">Carakan</h1>
                <p>Carakan adalah salah satu aksara tradisional Indonesia yang berkembang di pulau Jawa.
                    Aksara ini terutama digunakan untuk menulis bahasa Jawa, tetapi dalam perkembangannya
                    juga digunakan untuk menulis beberapa bahasa daerah lainnya seperti bahasa Sunda, Madura,
                    Sasak, dan Melayu, serta bahasa historis seperti Sanskerta dan Kawi. Pada umumnya terdapat
                    20 aksara jawa dengan lafal yang berbeda. Dalam pengucapannya orang jawa kerap membaca huruf a mirip dengan o contohnya adalah bata merah,
                    mereka biasa akan mengucapkannya dengan boto abang,
                </p>
                <p>pada carakan level 2, kita akan belajar 10 huruf carakan diantaranya pa, da, ja, ya, nya, ma, ga, ba, ta, nga </p>
                <table class="table table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th>Aksara</th>
                            <th>Dibaca</th>
                            <th>Pelafalan</th>
                            <th>Contoh</th>
                            <th>Terjemahan</th>
                        </tr>
                    </thead>
                    <tbody>

                        <a href="carakanlevel2"><img src="img/kembali.png" height="40" width="40" /></a>

                        <tr>
                            {{-- Audio letakkan di public/audio --}}
                            <td>ꦥ</td>
                            <td>Pa</td>
                            <td><button type="button" class="btn btn-info" onclick="play1()">Audio</button>
                                <audio id="audio1" src="{{ asset('audio/pa.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦔꦥ</td>
                            <td>ngapa</td>
                        </tr>

                        <tr>
                            <td>ꦣ</td>
                            <td>Dha</td>
                            <td><button type="button" class="btn btn-info" onclick="play2()">Audio</button>
                                <audio id="audio2" src="{{ asset('audio/dha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦣꦧ</td>
                            <td>dhaba</td>
                        </tr>
                        
                        <tr>
                            <td>ꦗ</td>
                            <td>Ja</td>
                            <td><button type="button" class="btn btn-info" onclick="play3()">Audio</button>
                                <audio id="audio3" src="{{ asset('audio/ja.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦗꦪꦚ</td>
                            <td>jayanya</td>
                        </tr>

                        <tr>
                            <td>ꦪ</td>
                            <td>Ya</td>
                            <td><button type="button" class="btn btn-info" onclick="play4()">Audio</button>
                                <audio id="audio4" src="{{ asset('audio/ya.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦗꦪꦚ</td>
                            <td>jayanya</td>
                        </tr>

                        <tr>
                            <td>ꦚ</td>
                            <td>Nya</td>
                            <td><button type="button" class="btn btn-info" onclick="play5()">Audio</button>
                                <audio id="audio5" src="{{ asset('audio/nya.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦗꦪꦚ</td>
                            <td>jayanya</td>
                        </tr>

                        <tr>
                            <td>ꦩ</td>
                            <td>Ma</td>
                            <td><button type="button" class="btn btn-info" onclick="play6()">Audio</button>
                                <audio id="audio6" src="{{ asset('audio/ma.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦒꦩꦛ</td>
                            <td>gamatha</td>
                        </tr>

                        <tr>
                            <td>ꦒ</td>
                            <td>Ga</td>
                            <td><button type="button" class="btn btn-info" onclick="play7()">Audio</button>
                                <audio id="audio7" src="{{ asset('audio/ga.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦒꦩꦛ</td>
                            <td>gamatha</td>
                        </tr>

                        <tr>
                            <td>ꦧ</td>
                            <td>Ba</td>
                            <td><button type="button" class="btn btn-info" onclick="play8()">Audio</button>
                                <audio id="audio8" src="{{ asset('audio/ba.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦣꦧ</td>
                            <td>dhaba</td>
                        </tr>

                        <tr>
                            <td>ꦛ</td>
                            <td>Tha</td>
                            <td><button type="button" class="btn btn-info" onclick="play9()">Audio</button>
                                <audio id="audio9" src="{{ asset('audio/tha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦒꦩꦛ</td>
                            <td>gamatha</td>
                        </tr>

                        <tr>
                            <td>ꦔ</td>
                            <td>Nga</td>
                            <td><button type="button" class="btn btn-info" onclick="play10()">Audio</button>
                                <audio id="audio10" src="{{ asset('audio/nga.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦔꦥ</td>
                            <td>ngapa</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <script>
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
        </script>
    @endsection
