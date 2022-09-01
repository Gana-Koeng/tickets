@extends('layouts.dashboard.dashbaord')

@section('content')
    <style>

        .form-control::placeholder {
            color: rgb(181, 181, 181);
            opacity: 20;
        }

        input[type="date"]::-webkit-calendar-picker-indicator {
            cursor: pointer;
            border-radius: 4px;
            margin-right: 2px;
            opacity: 0.6;
            filter: invert(0.8);
        }

        input[type="date"]::-webkit-calendar-picker-indicator:hover {
            opacity: 1
        }
    </style>
    <div class="row d-flex justify-content-center">
        <div class="col-lg-7 margin-tb">
            <div class="float-left">
                <h2>Add New Movie</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row" style="justify-content: center">
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control bg-grey text-light" placeholder="Enter Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Language:</strong>
                    <input type="text" name="lang" class="form-control bg-grey text-light"
                        placeholder="Enter Language">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Duration:</strong>
                    <input type="text" name="duration" class="form-control bg-grey text-light"
                        placeholder="Enter Duration">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Genre:</strong>
                    <input type="text" name="genre" class="form-control bg-grey text-light" placeholder="Enter Genre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>URL:</strong>
                    <input type="text" name="url" class="form-control bg-grey text-light" placeholder="Enter Url">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Date:</strong>
                    <input type="date" name="date" class="form-control bg-grey text-light" placeholder="Date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control bg-grey" placeholder="Image">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-7 text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection