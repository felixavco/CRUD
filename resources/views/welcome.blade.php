@extends('layouts.app')
@section('title', 'Welcome')

@section('content')
    @forelse($posts as $post)
        <h3>{{ $post->title }}</h3>
    @empty
        <h3>No hay nada</h3>
    @endforelse

@endsection

