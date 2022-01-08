@extends('layout.sidebar')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Creature</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('creatures.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $post->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Size:</strong>
                {{ $post->size }}
            </div>
            <div class="form-group">
                <strong>Type:</strong>
                {{ $post->type }}
            </div>
            <div class="form-group">
                <strong>Alignement:</strong>
                {{ $post->alignement }}
            </div>
        </div>
    </div>
@endsection