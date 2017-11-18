@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Lyric Newydd</div>
                
                <div class="panel-body">
                
                @include('includes.errors')
                
                {!! Form::open(['route' => 'submit.lyric']) !!}
                
                    @if($artist)
                    {!! Form::hidden('artist_id', $artist->id) !!}
                    @else
                    <div class="form-group">
                    <label for="artist_id">Dewis Artist</label>
                    {!! Form::select('artist_id', \App\Artist::all()->pluck('name', 'id'), null, ['class' => 'form-control']) !!}
                    </div>
                    @endif
                
                    <div class="form-group">
                        <label for="lyric">Lyric</label>
                        {!! Form::textarea('lyric', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Cadw', ['class' => 'btn btn-info']) !!} neu <a href="{{ route('home') }}">Canslo</a>
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
