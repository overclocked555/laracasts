@extends('app')

@section('content')
    <h1>About Me</h1>

    @if (count ($people))

        <h3>People I Like:</h3>
        <ul>

        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
        
        </ul>

    @endif

    <p>
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, quibusdam repellat? Ex totam porro atque quos provident ratione illum, vel et velit nisi sed voluptate sapiente eveniet tempore molestias minus.
    </p>
@stop