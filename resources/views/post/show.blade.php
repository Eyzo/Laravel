@extends('theme/layoutAdmin')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <a href="{{ route('news.index',[ 'news' => $post ]) }}" class="btn btn-info">Retour</a>
    <a href="{{ route('news.edit', [ 'news' => $post ]) }}" class="btn btn-primary">Editer</a>
@stop