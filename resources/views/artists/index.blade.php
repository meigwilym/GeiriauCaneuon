@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Artistiaid</div>
                
                <div class="panel-body">
                    
                    <div class="pull-right">
                        <p>
                            <a href="{{ route('submit.artist') }}" target="_blank" class="btn btn-primary" title="Ychwanegu artist newydd">+ Artist</a>
                        </p>
                    </div>
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>Enw</th>
                            <th>Twitter</th>
                            <th>Nifer Lluniau</th>
                            <th>Nifer Lyrics</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artists as $artist)
                        <tr>
                            <td><a href="{{route('artists.show', $artist)}}">{{ $artist->name }}</a></td>
                            <td>{{ $artist->twitter_handle }}</td>
                            <td>{{ $artist->images->count() }}</td>
                            <td>{{ $artist->lyrics->count() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                
                {!! $artists->render() !!}
                
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
