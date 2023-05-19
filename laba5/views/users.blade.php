@extends('layouts.app')

@section('content')
    <h1>Users</h1>
    <ul>
        @foreach ($users as $user)
            @if ($user['name'] == 'Sasha')
                <li>{{ $user['name'] }} - {{ $user['email'] }} (admin)</li>
            @else
                <li>{{ $user['name'] }} - {{ $user['email'] }}</li>
            @endif
        @endforeach
    </ul>
@endsection
