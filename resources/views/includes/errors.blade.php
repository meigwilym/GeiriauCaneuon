@if (session('errors'))
<div class="alert alert-danger">
    <p>Mae 'na broblem fach...</p>
    <ul>
        @foreach((session('errors'))->all() as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
</div>
@endif