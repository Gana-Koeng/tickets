@extends('layouts.dashboard.dashbaord')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('theaters.index') }}"> Back</a>
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
    
    <form action="{{ route('theaters.update',$theater->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Theater:</strong>
                    <input type="text" name="theater" value="{{ $theater->theater }}" class="form-control" placeholder="Theater">
                </div>
                <div class="form-group">
                    <strong>Time1:</strong>
                    <input type="time" name="time1" value="{{ $theater->time1 }}" class="form-control" placeholder="Time1">
                </div>
                <div class="form-group">
                    <strong>Time2:</strong>
                    <input type="time" name="time2" value="{{ $theater->time2 }}" class="form-control" placeholder="Time2">
                </div>
                <div class="form-group">
                    <strong>Time3:</strong>
                    <input type="time" name="time3" value="{{ $theater->time3 }}" class="form-control" placeholder="Time3">
                </div>
                <div class="form-group">
                    <strong>Time4:</strong>
                    <input type="time" name="time4" value="{{ $theater->time4 }}" class="form-control" placeholder="Time4">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection