@extends('layouts.app')
@section('content')
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4"></li>
                <li data-target="#myCarousel" data-slide-to="5"></li>
                <li data-target="#myCarousel" data-slide-to="6"></li>
                <li data-target="#myCarousel" data-slide-to="7"></li>
            </ol>
            <div class="item active">
                <div class="fill first-slide">
                    <img src="{{ asset('/img/transformers.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill second-slide">
                    <img src="{{ asset('/img/thor.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill third-slide">
                    <img src="{{ asset('/img/avatar.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill forth-slide">
                    <img src="{{ asset('/img/avatar.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill fifth-slide">
                    <img src="{{ asset('/img/avatar.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill sixth-slide">
                    <img src="{{ asset('/img/avatar.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill seventh-slide">
                    <img src="{{ asset('/img/avatar.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill eigth-slide">
                    <img src="{{ asset('/img/avatar.jpg') }}" alt="">
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- /.carousel -->
        <script>
            $(document).ready(function(event) {
                var top_header = $(".carousel .fill");

                $(window).scroll(function() {
                    var st = $(this).scrollTop();
                    top_header.css({
                        "background-position": "center calc(50% + " + st * 0.5 + "px)";
                    });
                });
            });
        </script>
        <div class="showing">

            <div class="btn-showing">
                <ul>
                    <a href="/"> Now showing </a>
                    <a href="{{ asset('/comingsoon') }}"> Coming soon </a>
                </ul>
            </div>


            {{-- Old swiper --}}
            <div class="card-coming">
                {{-- =swiper --}}

                {{-- <div class="card1" onclick="window.location.href='/moviedetail'" style="cursor: pointer">
                    <img src="{{ asset('/img/batman.jpg') }}" alt="">
                    <p>25-July-2022</p>
                    <h4>Godzilla</h4>
                    <h4>120 minutes</h4>
                </div> --}}

                <div class="card1" style=" cursor: pointer" data-toggle="modal" data-target="#myModal1">
                    <!-- Trigger the modal with a button -->
                    {{-- <a data-toggle="modal" data-target="#myModal"> --}}

                    <img src="{{ asset('/img/batman.jpg') }}" alt="">
                    <p>25-July-2022</p>
                    <h4>Godzilla</h4>
                    <h4>120 minutes</h4>
                    {{-- </a> --}}
                </div>

                <!-- Modal -->
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://www.youtube.com/embed/X0tOpBuYasI" title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="card2" style=" cursor: pointer" data-toggle="modal" data-target="#myModal2">

                    <img src="{{ asset('/img/blackp1.jpg') }}" alt="">
                    <p>25-July-2022</p>
                    <h4>Godzilla</h4>
                    <h4>120 minutes</h4>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Modal Header</h4>
                            </div>
                            <div class="modal-body">
                                <iframe src="https://www.youtube.com/embed/wVPmbqc0uDY"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="card3" onclick="window.location.href='/moviedetail'" style="cursor: pointer">
                    <img src="{{ asset('/img/conjuring2.jpg') }}" alt="">
                    <p>25-July-2022</p>
                    <h4>Godzilla</h4>
                    <h4>120 minutes</h4>
                </div>
                <div class="card4" onclick="window.location.href='/moviedetail'" style="cursor: pointer">
                    <img src="{{ asset('/img/bright.jpg') }}" alt="">
                    <p>25-July-2022</p>
                    <h4>Godzilla</h4>
                    <h4>120 minutes</h4>
                </div>
                <div class="card5" onclick="window.location.href='/moviedetail'" style="cursor: pointer">
                    <img src="{{ asset('/img/bright.jpg') }}" alt="">
                    <p>25-July-2022</p>
                    <h4>Godzilla</h4>
                    <h4>120 minutes</h4>
                </div>
                <div class="card6" onclick="window.location.href='/moviedetail'" style="cursor: pointer">
                    <img src="{{ asset('/img/conjuring2.jpg') }}" alt="">
                    <p>25-July-2022</p>
                    <h4>Godzilla</h4>
                    <h4>120 minutes</h4>
                </div>
                <div class="card7" onclick="window.location.href='/moviedetail'" style="cursor: pointer">
                    <img src="{{ asset('/img/blackp1.jpg') }}" alt="">
                    <p>25-July-2022</p>
                    <h4>Godzilla</h4>
                    <h4>120 minutes</h4>
                </div>
                <div class="card8" onclick="window.location.href='/moviedetail'" style="cursor: pointer">
                    <img src="{{ asset('/img/batman.jpg') }}" alt="">
                    <p>25-July-2022</p>
                    <h4>Godzilla</h4>
                    <h4>120 minutes</h4>
                </div>

            </div>
        </div>
    </div>


    {{-- <div class="slide">
            <img class="slides" src="{{asset('/img/batman1.jpg') }}" alt=""> --}}
    {{-- <img class="slides" src="../img/conjuring2a.jpg"> --}}
    {{-- <script>
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
            </script> --}}

    {{-- </div> --}}

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/vendor/holder.min.js"></script>
@endsection
