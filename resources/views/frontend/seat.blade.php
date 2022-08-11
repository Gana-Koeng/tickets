@extends('layouts.app')
@section('content')
    <div class="movie-descript">
        <img src="{{ asset('/img/kungfupanda.jpg') }}" alt="">
        <div class="movie-letter">

            <p><b>Kongfu Panda 3</b></p>
            <i class="bx bxs-calendar"></i>
            <span>05-Aug-2022</span><br>
            <i class="bx bxs-time"></i>
            <span>120 minutes</span><br>
            <i class="bx bx-movie-play"></i>
            <span>Comedy</span><br>
            <i class="bx bxs-megaphone"></i>
            <span>EN/KH</span>
        </div>
    </div>
@endsection
