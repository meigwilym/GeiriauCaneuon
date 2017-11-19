@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Lyric Newydd</div>
                
                <div class="panel-body">
                    
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @include('includes.errors')

                    {!! Form::open(['route' => 'submit.lyric']) !!}

                        @if($artist)
                        <h4>Lyric Newydd i {{ $artist->name }}</h4>
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

                        <div class="form-group">
                            <label for="suggested_by">Awgrymwyd gan</label>
                            {!! Form::text('suggested_by', null, ['class' => 'form-control']) !!}
                            <p class="help-block">Enw trydar y person wnaeth awgrymu'r lyric</p>
                        </div>

                        {!! Form::submit('Cadw', ['class' => 'btn btn-primary']) !!} 
                        neu <a href="{{ route('home') }}">Canslo</a>
                        
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
