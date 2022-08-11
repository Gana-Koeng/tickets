@extends('layouts.app')
@section('content')
    <div class="moviedetail">
        <div class="trailer">
            <h2>Movie Detail</h2>
            <iframe src="https://www.youtube.com/embed/X0tOpBuYasI" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            <div class="video">

            </div>
        </div>
        <div class="movie-info">
            <div class="info-image">
                <img src="{{ asset('/img/kungfupanda.jpg') }}" alt="">
            </div>
            <div class="info-descript">
                <h2><b>Kongfu Panda 3</b></h2>
                <i class="bx bxs-calendar"></i>
                <span>05-Aug-2022</span><br>
                <i class="bx bxs-time"></i>
                <span>120 minutes</span><br>
                <i class="bx bx-movie-play"></i>
                <span>Comedy</span><br>
                <i class="bx bxs-megaphone"></i>
                <span>EN/KH</span><br>
            </div>
        </div>

        <div class="movie-showtime">
            <div class="showtime-line">

            </div>
            <div class="theater">
                <div class="theater1">
                    <h3>Theater 1</h3>
                    <ul>
                        <a href="{{ asset('/seat') }}"><b>11:30</b></a>
                        <a href="{{ asset('/seat') }}"><b>14:00</b></a>
                        <a href="{{ asset('/seat') }}"><b>16:30</b></a>
                        <a href="{{ asset('/seat') }}"><b>19:30</b></a>
                    </ul>
                </div>
                <div class="theater1">
                    <h3>Theater 2</h3>
                    <ul>
                        <a href="{{ asset('/seat') }}"><b>11:30</b></a>
                        <a href="{{ asset('/seat') }}"><b>14:00</b></a>
                        <a href="{{ asset('/seat') }}"><b>16:30</b></a>
                        <a href="{{ asset('/seat') }}"><b>19:30</b></a>
                    </ul>
                </div>
                <div class="theater1">
                    <h3>Theater 3</h3>
                    <ul>
                        <a href="{{ asset('/seat') }}"><b>11:30</b></a>
                        <a href="{{ asset('/seat') }}"><b>14:00</b></a>
                        <a href="{{ asset('/seat') }}"><b>16:30</b></a>
                        <a href="{{ asset('/seat') }}"><b>19:30</b></a>
                    </ul>
                </div>
                <div class="theater1">
                    <h3>Theater 4</h3>
                    <ul>
                        <a href="{{ asset('/seat') }}"><b>11:30</b></a>
                        <a href="{{ asset('/seat') }}"><b>14:00</b></a>
                        <a href="{{ asset('/seat') }}"><b>16:30</b></a>
                        <a href="{{ asset('/seat') }}"><b>19:30</b></a>
                    </ul>
                </div>
                
            </div>

        </div>
    </div>
@endsection
