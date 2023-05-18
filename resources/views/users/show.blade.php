@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <ul>
                    <li>Username: {{ $user->name }}</li>
                    <li>Email: {{ $user->email }}</li>
                </ul>
            </div>
            <div class="col-md-8">
                @foreach ($user->posts as $p)
                    <h2>{{ $p->title }}</h2>
                    <p>{{ $p->description }}</p>
                    <p>{{ $p->created_at->diffForHumans() }}</p>
                @endforeach
            </div>
        </div>
    </div>
@endsection
