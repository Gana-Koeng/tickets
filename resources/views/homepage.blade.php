@extends('layouts.app')
@section('content')
    <!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible"content="IE=edge">
        <title>tickets_home</title>
        <meta name="description"content="">
        <meta name="viewport"content="width-device-width,initial-scale=1">
        <link rel="stylesheet"href="../css/main.css">
    </head>

    <body>
        <nav>
            <ul class="nav_links">
                <li><a href="#"> home </a></li>
                <li><a href="#"> showtime </a></li>
                <li><a href="#">comming soon</a></li>
                <li><a href="#"> contact us </a></li>
            </ul>
        </nav>
        {{-- <form class="slide">
            <img class="mySlides" src="../img/batman1.jpg">
            <img class="mySlides" src="../img/conjuring2a.jpg">
            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("mySlides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 1000); // Change image every 2 seconds
                }
            </script>
        </form> --}}

        <div>
            <ul class="showing">
                <li><a href="#"> Now showing </a></li>
                <li><a href="#"> comming soon </a></li>
            </ul>
        </div>

        <div class="row">
            <div class="column">
              <div class="card">
                <h3>Card 1</h3>
                <img src=".../img/pirate.jpg">
                <p>Some text</p>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <h3>Card 2</h3>
                <p>Some text</p>
                <p>Some text</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <h3>Card 3</h3>
                <p>Some text</p>
                <p>Some text</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <h3>Card 4</h3>
                <p>Some text</p>
                <p>Some text</p>
              </div>
            </div>
          </div>
    </body>


    </html>
@endsection
