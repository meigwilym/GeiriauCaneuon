@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Llun i Artist</div>
                
                <div class="panel-body">
                
                @include('includes.errors')
                
                {!! Form::open(['route' => ['submit.image', $artist], 'files' => true]) !!}
                
                    <div class="form-group">
                        <label for="name">Llun</label>
                        {!! Form::file('image') !!}
                    </div>

                <button type="submit" class="btn btn-info" name="redirect" value="1">Cadw Llun Arall</button> neu 
                <button type="submit" class="btn btn-success" name="redirect" value="2">Ychwanegu Lyric</button> neu 
                <a href="{{ route('home') }}">Canslo</a>
                {!! Form::close() !!}
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
