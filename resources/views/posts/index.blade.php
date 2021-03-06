@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
@auth
    <nav aria-label="breadcrumb mb-3">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
        </ol>
    </nav>
@endauth

<div class="row">
    @forelse($posts as $post)
        <div class="col-12 col-md-6 col-lg-4 mb-3">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    <a href="/posts/{{$post->id}}">
                        <h5 class="card-title">{{ $post->title }}</h5>
                    </a>
                    <p class="card-text">{{ substr($post->body, 0, 100) }}...</p>
                    @auth
                        @if($post->user_id === Auth::user()->id)
                            <div class="d-flex justify-content-center">
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-primary btn-edit mr-2">Edit <i class="fas fa-pencil-alt"></i></a>
                                <button data-post_id="{{$post->id}}" class="btn btn-danger btn-delete ml-2">Delete <i class="far fa-trash-alt"></i></button>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    @empty
        <h3>No post available</h3>
    @endforelse
</div>

<div class="d-flex justify-content-center">
    {{$posts->links()}}
</div>


@endsection
