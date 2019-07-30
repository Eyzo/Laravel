@extends('layout')

@section('content')
    @foreach($posts as $row)
    <div class="card-deck">
        @foreach($row as $post)
            <div class="card">
                <img src="https://www.place-hold.it/300x300" class="card-img-top" alt="image">
                <div class="card-body">
                    <h5 class="card-title">{{ $post['title'] }}</h5>
                    <p class="card-text">{{ substr($post['content'],0,100).'...' }}</p>
                    <p class="card-text"><small class="text-muted">{{ $post['updated_at'] }}</small></p>
                    <a class="btn btn-primary full-size" href="{{ route('single.view',$post) }}">Voir</a>
                </div>
            </div>
            @endforeach
        </div>
    @endforeach
    </div>
@stop