@extends('pages.app')

@section('content')

    <div class="panel-heading">
        About {{$first}} {{$last}}
    </div>

    <h3>People I Like:</h3>
@if (isset($people))
    <ul>
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
@endif

@endsection
