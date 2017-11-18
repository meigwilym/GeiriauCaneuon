@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Artist Newydd</div>
                
                <div class="panel-body">
                
                @include('includes.errors')
                
                {!! Form::open(['route' => 'submit.artist']) !!}
                
                    <div class="form-group">
                        <label for="name">Enw</label>
                        {!! Form::text('name', null, ['class' => 'form-control']) !!}
                    </div>

                    <div class="form-group">
                        <label for="twitter">Twitter</label>
                        {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
                    </div>

                    {!! Form::submit('Cadw', ['class' => 'btn']) !!} neu <a href="{{ route('home') }}">Canslo</a>
                {!! Form::close() !!}
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
