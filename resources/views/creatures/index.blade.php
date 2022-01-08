@extends('layouts.sidebar')
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Creature Codex</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('creatures.create') }}"> Create New Creature</a>
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
            <th>Name</th>
            <th>Size</th>
            <th>Type</th>
            <th>Alignment</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->size }}</td>
            <td>{{ $value->type }}</td>
            <td>{{ $value->alignment }}</td>
            <td>
                <form action="{{ route('creatures.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info" href="{{ route('creatures.show',$value->id) }}">Show</a>    
                    <a class="btn btn-primary" href="{{ route('creatures.edit',$value->id) }}">Edit</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!} 
@endsection