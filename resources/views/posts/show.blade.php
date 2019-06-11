@extends('layouts.app')
@section('title', substr($post->title, 0, 15).'...')

@section('content')
    <nav aria-label="breadcrumb mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/posts">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ substr($post->title, 0, 20) }}...</li>
        </ol>
    </nav>
    <h2 class="display-4 text-center mb-3">{{ $post->title}}</h2>
    <div class="row">
        <div class="col 12 col-md-6">
            <p class="lead">{{ $post->body }}</p>
        </div>
        <div class="col 12 col-md-6">
                <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZjVLtJDgMTOExfMHsTZuT4G5cAmaRT0N0vnoVbblrTTKkwSOb" alt="Card image cap">
        </div>
    </div>

    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>

@endsection
