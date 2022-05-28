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
                    mereka biasa akan mengucapkannya dengan boto abang,</p>
                <p>pada carakan level 1, kita akan belajar 10 huruf carakan diantaranya ha, na, ca, ra, ka,
                    da, ta, sa, wa, la </p>
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

                        <a href="carakanlevel1">Kembali</a>

                        <tr>
                            {{-- Audio letakkan di public/audio --}}
                            <td>ꦲ</td>
                            <td>Ha / a</td>
                            <td><button type="button" class="btn btn-info" onclick="play1()">Audio</button>
                                <audio id="audio1" src="{{ asset('audio/ha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦲꦢ</td>
                            <td>ada</td>
                        </tr>

                        <tr>
                            <td>ꦤ</td>
                            <td>Na</td>
                            <td><button type="button" class="btn btn-info" onclick="play2()">Audio</button>
                                <audio id="audio2" src="{{ asset('audio/naa.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> 
                            <td>ꦱꦤꦭꦫ</td>
                            <td>sana lara</td>
                        </tr>
                        
                        <tr>
                            <td>ꦕ</td>
                            <td>Ca</td>
                            <td><button type="button" class="btn btn-info" onclick="play3()">Audio</button>
                                <audio id="audio3" src="{{ asset('audio/ca.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦠꦠꦕꦫ</td>
                            <td>tata cara</td>
                        </tr>

                        <tr>
                            <td>ꦫ</td>
                            <td>Ra</td>
                            <td><button type="button" class="btn btn-info" onclick="play4()">Audio</button>
                                <audio id="audio4" src="{{ asset('audio/ra.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦱꦤꦭꦫ</td>
                            <td>sana lara</td>
                        </tr>

                        <tr>
                            <td>ꦏ</td>
                            <td>Ka</td>
                            <td><button type="button" class="btn btn-info" onclick="play5()">Audio</button>
                                <audio id="audio5" src="{{ asset('audio/ka.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦏꦠ</td>
                            <td>kata</td>
                        </tr>

                        <tr>
                            <td>ꦢ</td>
                            <td>Da</td>
                            <td><button type="button" class="btn btn-info" onclick="play6()">Audio</button>
                                <audio id="audio6" src="{{ asset('audio/da.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦲꦢ</td>
                            <td>ada</td>
                        </tr>

                        <tr>
                            <td>ꦠ</td>
                            <td>Ta</td>
                            <td><button type="button" class="btn btn-info" onclick="play7()">Audio</button>
                                <audio id="audio7" src="{{ asset('audio/ta.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦏꦠ</td>
                            <td>kata</td>
                        </tr>

                        <tr>
                            <td>ꦱ</td>
                            <td>Sa</td>
                            <td><button type="button" class="btn btn-info" onclick="play8()">Audio</button>
                                <audio id="audio8" src="{{ asset('audio/sa.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦱꦮꦃ</td>
                            <td>sawah</td>
                        </tr>

                        <tr>
                            <td>ꦮ</td>
                            <td>Wa</td>
                            <td><button type="button" class="btn btn-info" onclick="play9()">Audio</button>
                                <audio id="audio9" src="{{ asset('audio/wa.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦱꦮꦃ</td>
                            <td>sawah</td>
                        </tr>

                        <tr>
                            <td>ꦭ</td>
                            <td>La</td>
                            <td><button type="button" class="btn btn-info" onclick="play10()">Audio</button>
                                <audio id="audio10" src="{{ asset('audio/la.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td>
                            <td>ꦱꦤꦭꦫ</td>
                            <td>sana lara</td>
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
