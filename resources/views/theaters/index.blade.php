@extends('layouts.dashboard.dashbaord')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('theaters.create') }}"> Create Theater</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Theater</th>
            <th>Time1</th>
            <th>Time2</th>
            <th>Time3</th>
            <th>Time4</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($theaters as $theater)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $theater->theater}}</td>
            <td>{{ $theater->time1 }}</td>
            <td>{{ $theater->time2 }}</td>
            <td>{{ $theater->time3 }}</td>
            <td>{{ $theater->time4 }}</td>
            <td>
                <form action="{{ route('theaters.destroy',$theater->id) }}" method="POST">
      
                    <a class="btn btn-primary" href="{{ route('theaters.edit',$theater->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $theaters->links() !!}

@endsection