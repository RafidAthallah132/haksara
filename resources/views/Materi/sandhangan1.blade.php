@extends('layouts.app')

@section('content')
<div class="col-md-1" style="margin-left: 65px;">
    <a href="sandhanganlevel1"><img src="img/kembali.png" height="40" width="40" /></a>
  </div>
    <div class="row">
        <div class="col-md-11">
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

                        

                        <tr>
                            {{-- Audio letakkan di public/audio --}}
                            <td>ꦥꦶ</td>
                            <td>Wulu</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play1()">Audio</button>
                                <audio id="audio1" src="{{ asset('audio/pa.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Mengubah huruf vokal menjadi i</td>
                            <td>pi</td>
                        </tr>

                        <tr>
                            <td>ꦥꦸ</td>
                            <td>suku</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play2()">Audio</button>
                                <audio id="audio2" src="{{ asset('audio/dha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Mengubah huruf vokal menjadi u</td>
                            <td>pu</td>
                        </tr>
                        
                        <tr>
                            <td>ꦥꦼ</td>
                            <td>pepet</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play3()">Audio</button>
                                <audio id="audio3" src="{{ asset('audio/ja.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Mengubah huruf vokal menjadi e yang berbunyi seperti huruf e pada kata "becak, lele, dsb"</td>
                            <td>pe</td>
                        </tr>

                        <tr>
                            <td>ꦥꦺ</td>
                            <td>taling</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play4()">Audio</button>
                                <audio id="audio4" src="{{ asset('audio/ya.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Mengubah huruf vokal menjadi e yang berbunyi seperti huruf e pada kata "bekam, pelajar, dsb"</td>
                            <td>pe</td>
                        </tr>

                        <tr>
                            <td>ꦥꦺꦴ</td>
                            <td>taling tarung</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play5()">Audio</button>
                                <audio id="audio5" src="{{ asset('audio/nya.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Mengubah huruf vokal menjadi o</td>
                            <td>po</td>
                        </tr>

                        <tr>
                            <td>ꦥꦂ</td>
                            <td>layar</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play6()">Audio</button>
                                <audio id="audio6" src="{{ asset('audio/ma.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>menambah akhiran r</td>
                            <td>par</td>
                        </tr>

                        <tr>
                            <td>ꦥꦃ</td>
                            <td>wingyan</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play7()">Audio</button>
                                <audio id="audio7" src="{{ asset('audio/ga.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>menambah akhiran h</td>
                            <td>pah</td>
                        </tr>

                        <tr>
                            <td>ꦥꦁ</td>
                            <td>cecak</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play8()">Audio</button>
                                <audio id="audio8" src="{{ asset('audio/ba.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>menambah akhiran ng</td>
                            <td>pang</td>
                        </tr>

                        <tr>
                            <td>ꦥꦥ꧀‌</td>
                            <td>pangkon</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play9()">Audio</button>
                                <audio id="audio9" src="{{ asset('audio/tha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>membuat carakan sebelum pangkon mati</td>
                            <td>pap</td>
                        </tr>

                        <tr>
                            <td>꧈</td>
                            <td>pada lingsa</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play10()">Audio</button>
                                <audio id="audio10" src="{{ asset('audio/nga.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>tanda koma</td>
                            <td>,</td>
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
