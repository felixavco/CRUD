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
        <div class="col-12 col-md-6 mx-auto">
            <p class="lead my-3">{{ $post->body }}</p>
            <small>
                Posted @ {{ $post->created_at}}
            </small>
        </div>
    </div>
@endsection
