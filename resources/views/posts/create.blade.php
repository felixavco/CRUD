@extends('layouts.app')
@section('title', 'Create Post')

@section('content')
    <nav aria-label="breadcrumb mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/posts">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Post</li>
        </ol>
    </nav>
    <h2 class="display-4 text-center">Create new Post</h2>
    <div class="row">
        <div class="col-12 col-md-7 col-lg-6 mx-auto">
            <form action="/posts" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input name="title" type="text" class="form-control" id="title" placeholder="My new post">
                </div>
                <div class="form-group">
                    <textarea style="min-height: 175px; max-height: 175px" name="body" class="form-control" placeholder="Text body" ></textarea>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Create Post</button>
            </form>
        </div>
    </div>
@endsection
