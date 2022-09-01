@extends('layouts.app')
@section('content')
    <div id="myCarousel" class="carousel slide carousel-fade" data-interval="2000" data-ride="carousel">
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
                    <img src="{{ asset('/img/killfather1.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill second-slide">
                    <img src="{{ asset('/img/thor.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill third-slide">
                    <img src="{{ asset('https://m.media-amazon.com/images/M/MV5BMWM0NjQ0M2QtYmQ4OS00ZGM4LWExYzEtMWZmNGE3NTZkMjYyXkEyXkFqcGdeQXVyMzMwOTU5MDk@._V1_.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill forth-slide">
                    <img src="{{ asset('/img/avatar.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill fifth-slide">
                    <img src="{{ asset('https://m.media-amazon.com/images/M/MV5BNmExYTM4YmYtNWExZS00NTZiLWJhNTEtMzg4NDNhYTZjZDA1XkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill sixth-slide">
                    <img src="{{ asset('https://www.cnet.com/a/img/FGfhd5a7x4Xvc62J-qOnx4ikqmU/u003d/940x0/2019/05/11/c4743e02-efa4-442b-9827-7fac2998385e/john-wick-3-review-promo.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill seventh-slide">
                    <img src="{{ asset('https://m.media-amazon.com/images/M/MV5BNTAzYzk0MzktY2Y2MC00YWIwLTllODktYWYwNjI3ZjY3NGY5XkEyXkFqcGdeQWpnYW1i._V1_.jpg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="fill eigth-slide">
                    <img src="{{ asset('https://www.indiewire.com/wp-content/uploads/2019/07/top-gun.jpg') }}" alt="">
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

        <div class="showing">

            <div class="btn-showing">
                <ul>
                    <a href="/"> Now showing </a>
                    <a href="{{ asset('/comingsoon') }}"> Coming soon </a>
                </ul>
            </div>
            <div class="card-showing swiper">
                {{-- =swiper --}}
                @php
                    $countProduct = $products->count();
                    $rows = $countProduct / 2;
                @endphp
<<<<<<< HEAD
=======

>>>>>>> 0657a322ea9ec2c9809cc642679e8b21b91f01e7
                @foreach ($products as $product)
                    @if ($loop->first || $loop->index === $rows)
                        <div class="slide-content">
                            <div class="card-wrapper swiper-wrapper">
<<<<<<< HEAD
                    @endif
                    <div class="card swiper-slide" onclick="window.location.href='/moviedetail/'+{{ $product->id }}">
                        <div class="image-content">
                            <div class="card-image">
                                <img src="{{ asset('/image/' . $product->image) }}" alt="" class="card-img">
                            </div>
                        </div>
                        <div class="card-content">
                            <p>{{ $product->date }}</p>
                            <h4>{{ $product->name }}</h4>
                            <h5>{{ $product->duration }}</h5>
                        </div>
                    </div>
                    @if ($loop->index === $rows - 1 || $loop->last)
=======
                                @endif
                                <div class="card swiper-slide" onclick="window.location.href='/'+{{ $product->id }}">
                                    <div class="image-content">
                                        <div class="card-image">
                                            <img src="{{ asset('../image/' . $product->image) }}" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <div class="card-content">

                                        <p>{{ $product->date }}</p>
                                        <h4>{{ $product->name }}</h4>
                                        <h5>{{ $product->duration }}</h5>

                                    </div>
                                </div>

                                @if ($loop->index === $rows - 1 || $loop->last)
                            </div>
                        </div>

                    @endif
                @endforeach
                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
>>>>>>> 0657a322ea9ec2c9809cc642679e8b21b91f01e7
            </div>
        </div>
        @endif
        @endforeach
        <div class="swiper-button-next swiper-navBtn"></div>
        <div class="swiper-button-prev swiper-navBtn"></div>
        <div class="swiper-pagination"></div>
    </div>


    </div>
    </div>
           


    {{-- <div class="slide-content">
                <div class="slider-wrapper">
                    <div class="cardbox1 swiper-slide" onclick="window.location.href='/moviedetail'"
                        style="cursor: pointer">
                        <div class="image-content">
                            <img src="{{ asset('/img/godzilla.jpg') }}" alt="">
                        </div>
                        <div class="card-content">
                            <p>25-July-2022</p>
                            <h4>Godzilla</h4>
                            <h5>120 minutes</h5>
                        </div>
                    </div>
                    <div class="cardbox1 swiper-slide" onclick="window.location.href='/moviedetail'"
                        style="cursor: pointer">
                        <div class="image-content">
                            <img src="{{ asset('/img/godzilla.jpg') }}" alt="">
                        </div>
                        <div class="card-content">
                            <p>25-July-2022</p>
                            <h4>Godzilla</h4>
                            <h5>120 minutes</h5>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>

            </div> --}}
    {{-- <div class="about-us">

            </div> --}}





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
    {{-- Swiper JS --}}
    <script src="js/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".slide-content", {
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/vendor/holder.min.js"></script>
@endsection
