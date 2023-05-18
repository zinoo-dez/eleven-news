@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach ($posts as $p)
                    <div class="card">
                        <div class="card-header">
                            <h3><a href="{{ route('posts.show', $p->id) }}">{{ $p->title }}</a></h3>
                        </div>

                        <div class="card-body">
                            <p>{{ $p->description }}</p>
                            <p>Post by <a href="{{ route('users.show', $p->user->id) }}">{{ $p->user->name }}</a></p>

                        </div>

                        <div class="card-footer">
                            @foreach ($p->comments as $c)
                                {{-- {{ $c->user }} --}}
                                <p class="p-4 my-3 border border-2">{{ $c->body }} commented by <a
                                        href="{{ route('users.show', $c->user->id) }}">[{{ $c->user->name }}]</a> </p>
                            @endforeach
                            <p></p>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $posts->withQueryString()->onEachSide(5)->links() }}
        </div>
    </div>
@endsection
