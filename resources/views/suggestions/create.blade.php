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
                    
                    <p>I awgrymu lyric ar gyfer <a href="https://twitter.com/geiriauCaneuon" target="_blank">@geiriauCaneuon</a>, defnyddia'r ffurflen isod. </p>
                    
                    <p>Mae angen cwblhau pob blwch, <abbr title="os gweli y dda">ogydd</abbr>. </p>
                
                @include('includes.errors')
                
                {!! Form::open(['route' => 'suggest.store']) !!}
                
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="lyric">Y Lyric</label>
                            {!! Form::textarea('lyric', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        
                        <div class="form-group">
                            <label for="artist">Enw'r Artist</label>
                            {!! Form::text('artist', null, ['class' => 'form-control']) !!}
                        </div>

                        <div class="form-group">
                            <label for="twitter">Dy Gyfri Trydar</label>
                            {!! Form::text('twitter', null, ['class' => 'form-control']) !!}
                            <p class="help-block">Byddwn yn dy @io pan aiff y trydar allan. </p>
                        </div>

                        {!! Form::submit('Awgrymu!', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                </div>
                    
                {!! Form::close() !!}
                
                </div>
            </div>
            
            <div class="panel panel-default">
                <div class="panel-heading">@geiriauCaneuon</div>
                
                <div class="panel-body">                
                    <a class="twitter-timeline" href="https://twitter.com/geiriauCaneuon">@geiriauCaneuon</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
