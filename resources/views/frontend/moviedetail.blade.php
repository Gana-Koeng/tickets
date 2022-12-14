@extends('layouts.app')
@section('content')

    <div class="moviedetail">
        <div class="trailer">
            <h2>Movie Detail</h2>
            <iframe src="{{ $product->URL }}" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <div class="movie-info">
            <div class="info-image">
                <img src="{{ asset('/image/' . $product->image) }}" alt="">
            </div>
            <div class="info-descript">
                <h2><b>{{ $product->name }}</b></h2>
                <i class="bx bxs-calendar"></i>
                <span>{{ $product->date }}</span><br>
                <i class="bx bxs-time"></i>
                <span>{{ $product->duration }}</span><br>
                <i class="bx bx-movie-play"></i>
                <span>{{ $product->genre }}</span><br>
                <i class="bx bxs-megaphone"></i>
                <span>{{ $product->lang }}</span><br>
            </div>
        </div>
        <div class="movie-showtime">
            <div class="showtime-line">
                {{-- 1 line  --}}
            </div>
        
            <div class="theater">
                    <div class="theater1">
                        <h3></h3>
                        <ul>
                            <br>
                            {{-- <a href="{{ asset('/seat') }}"><b>4555</b></a> --}}
                        </ul>
                    </div>
            </div>
          
        </div>
    </div>
@endsection
