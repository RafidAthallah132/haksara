@extends('layouts.app')

@section('content')
<div class="col-md-1" style="margin-left: 65px;">
  <a href="aksaraswara"><img src="img/kembali.png" height="40" width="40" /></a>
</div>
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <h1 class="text-center">Aksara Swara</h1>
                <p>
                    Pada aksara jawa, juga dikenal pula istilah huruf vokal yaitu a, i, u, e, dan o. Memang sebenarnya
                    carakan
                    "ha" disertai dengan sandhangan dapat melakukan hal yang sama dengan aksara swara, namun hal ini sangat
                    jarang ditemui
                </p>
                <table class="table table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th>Aksara Swara</th>
                            <th>Huruf vokal</th>
                            <th>Contoh</th>
                            <th>Dibaca</th>
                        </tr>
                    </thead>
                    <tbody>

    

                        <tr>
                            <td>ꦄ</td>
                            <td>A</td>
                            <td>ꦫꦱꦄꦩꦤ꧀</td>
                            <td>rasa aman</td>
                        </tr>

                        <tr>
                            <td>ꦆ</td>
                            <td>I</td>
                            <td>ꦧꦼꦭꦶꦆꦏꦤ꧀</td>
                            <td>beli ikan</td>
                        </tr>

                        <tr>
                            <td>ꦈ</td>

                            <td>U</td>
                            <td>ꦈꦭꦸꦲꦠꦶ</td>

                            <td>ulu hati</td>
                        </tr>

                        <tr>
                            <td>ꦌ</td>
                            <td>E</td>
                            <td>ꦠꦶꦒꦌꦩꦱ꧀</td>

                            <td>tiga emas</td>
                        </tr>

                        <tr>
                            <td>ꦎ</td>
                            <td>O</td>
                            <td>ꦧꦸꦫꦸꦎꦤ꧀ꦠ</td>

                            <td>buru onta</td>
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
