@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <h1 class="text-center">Aksara Murda</h1>
                <p>
                    Pada aksara jawa, juga dikenal pula istilah huruf kapital yang penggunaannya mirip pada huruf kapital dalam PUEBI.
                    Aksara murda terdiri dari 8 aksara yaitu Na, Ka, Ta, Sa, Pa, Ga, Ba, Nya. Dalam penggunaannya, 
                    kata yang memiliki huruf kapital harus menggunakan aksara murda alih-alih carakan pada aksara pertamanya, jika terdapat huruf kapital dalam
                    kata dimana huruf kapital tersebut merupakan selain 8 aksara tadi misal kata "luka", maka suku kata ke 2 yang akan dijadikan aksara murda atau "ka"
                    jika suku kata kedua juga tidak memiliki aksara murda maka suku kata ketiga yang akan menjadi aksara murda dan seterusnya,
                    dan bila dalam kata tersebut tidak terdapat suku kata yang memiliki aksara murda, maka kata tersebut tidak menggunakan aksara murda
                    meskipun didalamnya terdapat huruf kapital
                </p>
                <table class="table table-hover">
                    <thead>
                        <tr class="table-primary">
                            <th>Aksara Murda</th>
                            <th>Penjelasan</th>
                            <th>Dibaca</th>
                        </tr>
                    </thead>
                    <tbody>

                        <a href="aksaramurda"><img src="img/kembali.png" height="40" width="40" /></a>

                        <tr>
                            <td>ꦟ</td>
                            <td>Merupakan huruf kapital dari "Na"</td>
                            <td>Na</td>
                        </tr>

                        <tr>
                            <td>ꦑ</td>
                            <td>Merupakan huruf kapital dari "Ka"</td>
                            <td>Ka</td>
                        </tr>
                        
                        <tr>
                            <td>ꦡ</td>
                            <td>Merupakan huruf kapital dari "Ta"</td>
                            <td>Ta</td>
                        </tr>

                        <tr>
                            <td>ꦯ</td>
                            <td>Merupakan huruf kapital dari "Sa"</td>
                            <td>Sa</td>
                        </tr>

                        <tr>
                            <td>ꦦ</td>
                            <td>Merupakan huruf kapital dari "Pa"</td>
                            <td>Pa</td>
                        </tr>

                        <tr>
                            <td>ꦓ</td>
                            <td>Merupakan huruf kapital dari "Ga"</td>
                            <td>Ga</td>
                        </tr>

                        <tr>
                            <td>ꦨ</td>
                            <td>Merupakan huruf kapital dari "Ba"</td>
                            <td>Ba</td>
                        </tr>

                        <tr>
                            <td>ꦘ</td>
                            <td>Merupakan huruf kapital dari "Nya"</td>
                            <td>Nya</td>
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
