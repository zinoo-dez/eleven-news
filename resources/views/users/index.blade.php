@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($users as $u)
                    <p>User name is {{ $u->name }}</p>
                    @foreach ($u->posts as $p)
                        <p>This is post{{ $p->title }}</p>
                    @endforeach
                    @foreach ($u->comments as $c)
                        <p>This is comment is {{ $c->body }}</p>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>
@endsection
