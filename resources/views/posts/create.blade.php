@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('posts.store') }}" class="shadow-lg p-5 rounded" method="post"
                    enctype="multipart/form-data">
                    <h2 class="text-center mb-3">Create Post</h2>
                    @csrf
                    <div class="mb-3">
                        <select name="category_id" class="form-control">
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="">Feature</label>
                        <input type="checkbox" name="is_featured" value="1">
                    </div>
                    <div class="mb-3">
                        <label for="">Title</label>
                        <input class="form-control" type="text" placeholder="Insert Title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="">Slug</label>
                        <input class="form-control" type="text" placeholder="Insert Slug" name="slug">
                    </div>
                    <div class="mb-3">
                        <label for="">Description</label>
                        <input class="form-control" type="text" placeholder="Insert Description" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="">Photo</label>
                        <input class="form-control" type="file" name="photo">
                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Create">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
