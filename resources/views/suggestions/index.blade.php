@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Awgrymu Lyric</div>
                
                <div class="panel-body">
                    
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    
                    <div class="pull-right">
                        <p>
                            <a href="{{ route('submit.artist') }}" target="_blank" class="btn btn-primary">+ Artist</a>
                            <a href="{{ route('submit.lyric') }}" target="_blank" class="btn btn-primary">+ Lyric</a>
                        </p>
                    </div>
                    
                    @if($suggestions->count() == 0)
                    <h3>Dim byd!</h3>
                    <p>Does dim awgrymiadau wedi'u derbyn ar hyn o bryd. </p>
                    @else 
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Lyric</th>
                                <th>Artist</th>
                                <th>Oddi Wrth</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($suggestions as $suggestion)
                            <tr>
                                <td>{{ $suggestion->lyric }}</td>
                                <td>{{ $suggestion->artist }}</td>
                                <td>{{ $suggestion->twitter }}</td>
                                <td>
                                    {!! Form::open(['route' => 'suggestions.process']) !!}
                                    {!! Form::hidden('suggestion_id', $suggestion->id) !!}
                                    {!! Form::submit('Cuddio', ['class' => 'btn btn-warning btn-sm']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                    @endif
                 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
