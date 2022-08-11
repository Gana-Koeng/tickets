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

                <div id="light">
                    <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
                    <iframe width="1000" height="500" src="https://www.youtube.com/embed/X0tOpBuYasI"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div id="fade" onClick="lightbox_close();">

                </div>
                <div class="slide-content2">
                    <div class="swiper-wrapper">
                        <div class="card1 swiper-slide" onclick="window.location.href='/moviedetail'">
                            <div class="image-content2">

                                <div class="card-image2">
                                    <img src="{{ asset('/img/batman.jpg') }}" alt="" onclick="lightbox_open();"
                                        class=card-img2>
                                </div>
                            </div>

                            <div class="card-content">
                                <p>25-July-2022</p>
                                <h4>Godzilla</h4>
                                <h5>120 minutes</h5>
                            </div>
                        </div>
                        <div class="card1 swiper-slide" onclick="window.location.href='/moviedetail'">
                            <div class="image-content2">

                                <div class="card-image2">
                                    <img src="{{ asset('/img/batman.jpg') }}" alt="" onclick="lightbox_open();"
                                        class=card-img2>
                                </div>
                            </div>

                            <div class="card-content">
                                <p>25-July-2022</p>
                                <h4>Godzilla</h4>
                                <h5>120 minutes</h5>
                            </div>
                        </div>
                        <div class="card1 swiper-slide" onclick="window.location.href='/moviedetail'">
                            <div class="image-content2">

                                <div class="card-image2">
                                    <img src="{{ asset('/img/batman.jpg') }}" alt="" onclick="lightbox_open();"
                                        class=card-img2>
                                </div>
                            </div>

                            <div class="card-content">
                                <p>25-July-2022</p>
                                <h4>Godzilla</h4>
                                <h5>120 minutes</h5>
                            </div>
                        </div>
                        <div class="card1 swiper-slide" onclick="window.location.href='/moviedetail'">
                            <div class="image-content2">

                                <div class="card-image2">
                                    <img src="{{ asset('/img/batman.jpg') }}" alt="" onclick="lightbox_open();"
                                        class=card-img2>
                                </div>
                            </div>

                            <div class="card-content">
                                <p>25-July-2022</p>
                                <h4>Godzilla</h4>
                                <h5>120 minutes</h5>
                            </div>
                        </div>
                        <div class="card1 swiper-slide" onclick="window.location.href='/moviedetail'">
                            <div class="image-content2">

                                <div class="card-image2">
                                    <img src="{{ asset('/img/batman.jpg') }}" alt="" onclick="lightbox_open();"
                                        class=card-img2>
                                </div>
                            </div>

                            <div class="card-content">
                                <p>25-July-2022</p>
                                <h4>Godzilla</h4>
                                <h5>120 minutes</h5>
                            </div>
                        </div>
                        <div class="card1 swiper-slide" onclick="window.location.href='/moviedetail'">
                            <div class="image-content2">

                                <div class="card-image2">
                                    <img src="{{ asset('/img/batman.jpg') }}" alt="" onclick="lightbox_open();"
                                        class=card-img2>
                                </div>
                            </div>

                            <div class="card-content">
                                <p>25-July-2022</p>
                                <h4>Godzilla</h4>
                                <h5>120 minutes</h5>
                            </div>
                        </div>
                        <div class="card1 swiper-slide" onclick="window.location.href='/moviedetail'">
                            <div class="image-content2">

                                <div class="card-image2">
                                    <img src="{{ asset('/img/batman.jpg') }}" alt="" onclick="lightbox_open();"
                                        class=card-img2>
                                </div>
                            </div>

                            <div class="card-content">
                                <p>25-July-2022</p>
                                <h4>Godzilla</h4>
                                <h5>120 minutes</h5>
                            </div>
                        </div>
                        <div class="card1 swiper-slide" onclick="window.location.href='/moviedetail'">
                            <div class="image-content2">

                                <div class="card-image2">
                                    <img src="{{ asset('/img/batman.jpg') }}" alt="" onclick="lightbox_open();"
                                        class=card-img2>
                                </div>
                            </div>

                            <div class="card-content">
                                <p>25-July-2022</p>
                                <h4>Godzilla</h4>
                                <h5>120 minutes</h5>
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>

        </div>
    </div>
    {{-- slide --}}
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
    {{-- swiper --}}
    <script>
        var swiper = new Swiper(".slide-content2", {
        slidesPerView: 4,
        spaceBetween: 20,
        slidesPerGroup: 4,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        }
      });
    </script>
    {{-- video link --}}
    <script>
        window.document.onkeydown = function(e) {
            if (!e) {
                e = event;
            }
            if (e.keyCode == 27) {
                lightbox_close();
            }
        }

        function lightbox_open() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            window.scrollTo(0, 0);
            document.getElementById('light').style.display = 'block';
            document.getElementById('fade').style.display = 'block';
            lightBoxVideo.play();
        }

        function lightbox_close() {
            var lightBoxVideo = document.getElementById("VisaChipCardVideo");
            document.getElementById('light').style.display = 'none';
            document.getElementById('fade').style.display = 'none';
            lightBoxVideo.pause();
        }
    </script>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/vendor/holder.min.js"></script>
@endsection
