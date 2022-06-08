@extends('layouts.app')

@section('content')
<div class="col-md-1" style="margin-left: 65px;">
    <a href="pasanganlevel2"><img src="img/kembali.png" height="40" width="40" /></a>
  </div>
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <h1 class="text-center">Pasangan</h1>
                <p>Pasangan aksara Jawa merupakan bentuk 
                    khusus atau simbol yang berfungsi untuk mematikan atau menghilangkan huruf vokal dari aksara dasar atau carakan.
                    Sama halnya seperti carakan pada umumnya terdapat 20 aksara jawa pasangan dimana masing-masing carakan memilik aksara jawa pasangannya masing-masing.
                </p>
                <p>pada pasangan level 2, kita akan belajar 10 huruf pasangan diantaranya pa, da, ja, ya, nya, ma, ga, ba, ta, nga </p>
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
                            <td>Pa</td>
                            <td>ꦕꦤ꧀ꦥ</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play1()">Audio</button>
                                <audio id="audio1" src="{{ asset('audio/pa.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "pa"</td>
                            <td>canpa</td>
                        </tr>

                        <tr>
                            <td>Dha</td>
                            <td>ꦕꦤ꧀ꦝ</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play2()">Audio</button>
                                <audio id="audio2" src="{{ asset('audio/dha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "dha"</td>
                            <td>candha</td>
                        </tr>
                        
                        <tr>
                            <td>Ja</td>
                            <td>ꦕꦤ꧀ꦗ</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play3()">Audio</button>
                                <audio id="audio3" src="{{ asset('audio/ja.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ja"</td>
                            <td>canja</td>
                        </tr>

                        <tr>
                            <td>Ya</td>
                            <td>ꦕꦤ꧀ꦪ</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play4()">Audio</button>
                                <audio id="audio4" src="{{ asset('audio/ya.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ya"</td>
                            <td>canya</td>
                        </tr>

                        <tr>
                            <td>Nya</td>
                            <td>ꦕꦤ꧀ꦚ</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play5()">Audio</button>
                                <audio id="audio5" src="{{ asset('audio/nya.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "nya"</td>
                            <td>cannya</td>
                        </tr>

                        <tr>
                            <td>Ma</td>
                            <td>ꦕꦤ꧀ꦩ</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play6()">Audio</button>
                                <audio id="audio6" src="{{ asset('audio/ma.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ma"</td>
                            <td>canma</td>
                        </tr>

                        <tr>
                            <td>Ga</td>
                            <td>ꦕꦤ꧀ꦒ</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play7()">Audio</button>
                                <audio id="audio7" src="{{ asset('audio/ga.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ga"</td>
                            <td>can ga</td>
                        </tr>

                        <tr>
                            <td>Ba</td>
                            <td>ꦕꦤ꧀ꦧ</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play8()">Audio</button>
                                <audio id="audio8" src="{{ asset('audio/ba.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "ba"</td>
                            <td>canba</td>
                        </tr>

                        <tr>
                            <td>Tha</td>
                            <td>ꦕꦤ꧀ꦛ</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play9()">Audio</button>
                                <audio id="audio9" src="{{ asset('audio/tha.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "tha"</td>
                            <td>cantha</td>
                        </tr>

                        <tr>
                            <td>Nga</td>
                            <td>ꦕꦤ꧀ꦔ</td>

                            {{-- <td><button type="button" class="btn btn-info" onclick="play10()">Audio</button>
                                <audio id="audio10" src="{{ asset('audio/nga.mp3') }}" type="audio/mpeg"
                                ></audio>
                            </td> --}}
                            <td>Aksara "na" mati karena pasangan, dilanjut dengan "nga"</td>
                            <td>can nga</td>
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
