@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        <a href="{{ route('submit.artist') }}" class="btn btn-info btn-lg">+ Creu Artist Newydd</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
