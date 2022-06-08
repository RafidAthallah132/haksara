@extends('layouts.app')

@section('content')
<div class="col-md-1" style="margin-left: 65px;">
    <a href="pasanganlevel1"><img src="img/kembali.png" height="40" width="40" /></a>
  </div>
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <h1 class="text-center">Pasangan</h1>
                <p>Pasangan aksara Jawa merupakan bentuk 
                    khusus atau simbol yang berfungsi untuk mematikan atau menghilangkan huruf vokal dari aksara dasar atau carakan.
                    Sama halnya seperti carakan pada umumnya terdapat 20 aksara jawa pasangan dimana masing-masing carakan memilik aksara jawa pasangannya masing-masing.
                </p>
                <p>pada pasangan level 1, kita akan belajar 10 huruf pasangan diantaranya ha, na, ca, ra, ka, da, ta, sa, wa, la </p>
                <table class="table table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th>Pasangan dari carakan</th>
                            <th>Aksara Pasangan</th>
                            {{-- <th>Pelafalan</th> --}}
                            <th>Penjelasan</th>
                            <th>Dibaca</th>
                        </tr>
                    </thead>
                    <tbody>

                       

                        <tr>
                            {{-- Audio letakkan di public/audio --}}
                            <td>Ha</td>
                            <td>ꦕꦤ꧀ꦲ </td>
                            {{-- <td><button type="button" class="btn btn-info" onclick="play1()">Audio</button>
                                <audio id="audio1" src="{{ asset('audio/pa.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ha"</td>
                            <td>canha</td>
                        </tr>

                        <tr>
                            <td>Na</td>
                            <td>ꦕꦤ꧀ꦤ</td>
                            {{-- <td><button type="button" class="btn btn-info" onclick="play2()">Audio</button>
                                <audio id="audio2" src="{{ asset('audio/dha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "na"</td>
                            <td>canna</td>
                        </tr>
                        
                        <tr>
                            <td>Ca</td>
                            <td>ꦕꦤ꧀ꦕ</td>
                            {{-- <td><button type="button" class="btn btn-info" onclick="play3()">Audio</button>
                                <audio id="audio3" src="{{ asset('audio/ja.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ca"</td>
                            <td>canca</td>
                        </tr>

                        <tr>
                            <td>Ra</td>
                            <td>ꦕꦤ꧀ꦫ</td>
                            {{-- <td><button type="button" class="btn btn-info" onclick="play4()">Audio</button>
                                <audio id="audio4" src="{{ asset('audio/ya.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ra"</td>
                            <td>canra</td>
                        </tr>

                        <tr>
                            <td>Ka</td>
                            <td>ꦕꦤ꧀ꦏ</td>
                            {{-- <td><button type="button" class="btn btn-info" onclick="play5()">Audio</button>
                                <audio id="audio5" src="{{ asset('audio/nya.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ka"</td>
                            <td>canka</td>
                        </tr>

                        <tr>
                            <td>Da</td>
                            <td>ꦕꦤ꧀ꦢ</td>
                            {{-- <td><button type="button" class="btn btn-info" onclick="play6()">Audio</button>
                                <audio id="audio6" src="{{ asset('audio/ma.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "da"</td>
                            <td>canda</td>
                        </tr>

                        <tr>
                            <td>Ta</td>
                            <td>ꦕꦤ꧀ꦠ</td>
                            {{-- <td><button type="button" class="btn btn-info" onclick="play7()">Audio</button>
                                <audio id="audio7" src="{{ asset('audio/ga.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ta"</td>
                            <td>canta</td>
                        </tr>

                        <tr>
                            <td>Sa</td>
                            <td>ꦕꦤ꧀ꦱ</td>
                            {{-- <td><button type="button" class="btn btn-info" onclick="play8()">Audio</button>
                                <audio id="audio8" src="{{ asset('audio/ba.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ta"</td>
                            <td>cansa</td>
                        </tr>

                        <tr>
                            <td>Wa</td>
                            <td>ꦕꦤ꧀ꦮ</td>
                            {{-- <td><button type="button" class="btn btn-info" onclick="play9()">Audio</button>
                                <audio id="audio9" src="{{ asset('audio/tha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "wa"</td>
                            <td>canwa</td>
                        </tr>

                        <tr>
                            <td>La</td>
                            <td>ꦕꦤ꧀ꦭ</td>
                            {{-- <td><button type="button" class="btn btn-info" onclick="play10()">Audio</button>
                                <audio id="audio10" src="{{ asset('audio/nga.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "la"</td>
                            <td>canla</td>
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
