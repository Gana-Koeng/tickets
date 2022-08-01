@extends('layouts.app')
@section('content')

    <div class="body-content">
        <div class="slide">
            <img class="slides" src="{{asset('/img/batman1.jpg') }}" alt="">
            {{-- <img class="slides" src="../img/conjuring2a.jpg"> --}}
            <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                    var i;
                    var x = document.getElementsByClassName("slides");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    myIndex++;
                    if (myIndex > x.length) {
                        myIndex = 1
                    }
                    x[myIndex - 1].style.display = "block";
                    setTimeout(carousel, 1500); // Change image every 2 seconds
                }
            </script>
            
        </div>
        <div class="showing">
          <ul>
              <li><a href="#"> Now showing </a></li>
              <li><a href="#"> Coming soon </a></li>
          </ul>
      </div>
        
    </div>
    {{-- <div>
            <ul class="showing">
                <li><a href="#"> Now showing </a></li>
                <li><a href="#"> Coming soon </a></li>
            </ul>
        </div> --}}

    {{-- <div class="row">
            <div class="column">
              <div class="card">
                <h3>Card 1</h3>
                <img src="../img/pirate.jpg">
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
          </div> --}}
@endsection
