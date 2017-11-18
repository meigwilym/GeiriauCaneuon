@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">{{ $artist->name }}</div>
                
                <div class="panel-body">
                
                @if($artist->twitter)
                <p><a href="{{ $artist->twitter_url }}">{{ $artist->twitter_handle }}</a></p>
                @endif
                

                @if($artist->images->count() > 0)
                <h3>Lluniau</h3>
                @foreach($artist->images as $image)
                <img src="{{ $image->url() }}" height="150" class="img-thumbnail" style="height:150px;"/>
                @endforeach
                @endif
                <p><br /><a href="{{route('submit.image', $artist)}}" class="btn btn-success" title="Ychwanegu Llun newydd i {{ $artist->name }}">+ Llun</a></p>
                

                
                <div class="pull-right">
                    <a href="{{route('submit.lyric', $artist)}}" class="btn btn-success" title="Ychwanegu Lyric newydd i {{ $artist->name }}">+ Lyric</a>
                </div>
                
                <h3>Lyrics</h3>
                
                @if($artist->lyrics->count() == 0)
                <h3>Nid oes lyric ar gyfer {{ $artist->name }}</h3>
                <p><a href="{{route('submit.lyric', $artist)}}" class="btn btn-success btn-lg">Ychwanega Lyric!</a></p>
                @else
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>Lyric</th>
                            <th>Trydar</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artist->lyrics as $lyric)
                        <tr>
                            <td>{{ $lyric->lyric }}</td>
                            <td>{{ $lyric->logs->count() }}</td>
                            <td>
                                <a href="{{ route('lyrics.update', $lyric) }}" class="btn btn-info btn-sm">Golygu</a>
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
