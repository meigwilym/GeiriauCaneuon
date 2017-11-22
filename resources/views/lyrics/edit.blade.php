@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Golygu Lyric</div>
                
                <div class="panel-body">
                
                @include('includes.errors')
                    
                {!! Form::model($lyric, ['route' => ['lyrics.update', $lyric], 'method' => 'put']) !!}
                
                {!! Form::hidden('artist_id', $lyric->artist->id) !!}
                
                <div class="form-group">
                    <label for="lyric">Lyric</label>
                    {!! Form::textarea('lyric', null, ['class' => 'form-control']) !!}
                    <div id="count" class="pull-right"></div>
                </div>
                
                <div class="form-group">
                    <label for="suggested_by">Awgrymwyd gan</label>
                    {!! Form::text('suggested_by', null, ['class' => 'form-control']) !!}
                    <p class="help-block">Enw trydar y person wnaeth awgrymu'r lyric</p>
                </div>
                
                {!! Form::submit('Cadw', ['class' => 'btn btn-primary']) !!} neu <a href="{{ route('artists.show', $lyric->artist) }}">Canslo</a>
                {!! Form::close() !!}
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
(function($){    
    chCount();
    $("textarea").keyup(function(){
        chCount();
    });
    
    function chCount(){
        var twitter = '{{$lyric->artist->twitter}}';
        $("#count").text(($("textarea").val().length - twitter.length)+'/280');
    }
})($)
</script>
@endsection