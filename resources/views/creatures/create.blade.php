@extends('layouts.sidebar')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Creature</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('creatures.index') }}"> Back</a>
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

<form action="{{ route('creatures.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>user_id:</strong>
                <input type="text" name="user_id" class="form-control" placeholder="Enter user_id">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Creature Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Enter Creature name"></textarea>
            </div>
            <div class="form-group">
                <strong>Size:</strong>
                <input type="text" name="size" class="form-control" placeholder="Creature size"></textarea>
            </div>
            <div class="form-group">
                <strong>Type:</strong>
                <input type="text" name="type" class="form-control" placeholder="Creature type"></textarea>
            </div>
            <div class="form-group">
                <strong>Alignment:</strong>
                <input type="text" name="alignment" class="form-control" placeholder="Creature alignmengt"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection