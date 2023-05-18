@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h2>{{ $post->title }}</h2>
                    </div>
                    <div class="card-body">
                        <img src="{{ asset("images/$post->photo") }}" class="img-fluid" alt="">
                        <p>{{ $post->description }}</p>
                        <p>Post by <a href="{{ route('users.show', $post->user->id) }}">{{ $post->user->name }}</a></p>
                        {{-- to fixed --}}
                        @auth
                            <form action="{{ route('comments.store2', $post->id) }}" method="post">
                                @csrf
                                <textarea type="text" class="form-control mb-2" name="body" placeholder="Type Your Feedback"> </textarea>
                                <input type="submit" value="Send" class="btn btn-primary">
                            </form>
                        @endauth
                        @guest
                            <form action="{{ route('comments.store2', $post->id) }}" method="post">
                                @csrf
                                <textarea type="text" class="form-control mb-2" name="body" placeholder="Type Your Feedback"> </textarea>
                                <input type="submit" value="Send" class="btn btn-primary">
                            </form>
                        @endguest
                    </div>

                    <div class="card-footer">
                        @foreach ($post->comments as $c)
                            <p class="p-4 my-3 border border-2 bg-white">{{ $c->body }} commented by <a
                                    href="{{ route('users.show', $c->user->id) }}">[{{ $c->user->name }}]</a> </p>
                        @endforeach
                        <p></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
