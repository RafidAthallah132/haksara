@extends('layouts.app')

@section('content')
<div class="col-md-1" style="margin-left: 65px;">
  <a href="aksaraangka"><img src="img/kembali.png" height="40" width="40" /></a>
</div>
    <div class="row">
        <div class="col-md-11">
            <div class="panel panel-default">
                <h1 class="text-center">Aksara Angka</h1>
                <p>
                    Pada aksara jawa, juga dikenal pula istilah angka dengan format sama dengan angka modern yaitu dari angka 0 sampai 9.
                    Dalam penggunaannya, aksara angka harus berada dalam tanda pada pangkat atau ꧇ ꧇ untuk membedakan antara carakan dan
                    aksara angka 
                </p>
                <table class="table table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th>Aksara Angka</th>
                            <th>Angka</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>꧇꧑꧇</td>
                            <td>1</td>
                        </tr>

                        <tr>
                            <td>꧇꧒꧇</td>
                            <td>2</td>
                        </tr>
                        
                        <tr>
                            <td>꧇꧓꧇</td>
                            <td>3</td>
                        </tr>

                        <tr>
                            <td>꧇꧔꧇</td>
                            <td>4</td>
                        </tr>

                        <tr>
                            <td>꧇꧕꧇</td>
                            <td>5</td>
                        </tr>

                        <tr>
                            <td>꧇꧖꧇</td>
                            <td>6</td>
                        </tr>

                        <tr>
                            <td>꧇꧗꧇</td>
                            <td>7</td>
                        </tr>

                        <tr>
                            <td>꧇꧘꧇</td>
                            <td>8</td>
                        </tr>

                        <tr>
                            <td>꧇꧙꧇</td>
                            <td>9</td>
                        </tr>

                        <tr>
                            <td>꧇꧐꧇</td>
                            <td>0</td>
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
