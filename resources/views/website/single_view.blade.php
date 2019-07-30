@extends('layout')

@section('content')

    <h1> {{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>{{ $category->name }}</p>
    <p class="text-muted">{{ $post->created_at }}</p>
    @foreach($tags as $tag)
        <span class="badge badge-pill badge-info">{{ $tag->name }}</span>
    @endforeach
@stop