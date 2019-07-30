@extends('layout')

@section('content')

    {!! Form::open(['method' => 'PUT','route' => ['news.update', $post->id]]) !!}
    <!-- 'action' => route('news.update',['news' => $post]) -->
    <div class="form-group">
        {!! Form::label('Titre :') !!}
        {!! Form::text('title',$post->title, [ 'class' => 'form-control']) !!}


    </div>
    <div class="form-group">
        {!! Form::label('Slug :') !!}
        {!! Form::text('slug',$post->slug, [ 'class' => 'form-control' ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Content :') !!}
        {!! Form::textarea('content',$post->content, ['class' => 'form-control' ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Categorie :') !!}
        {!! Form::select('category_id',[null => ''] + $categories,$post->category_id,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Tags :') !!}
        {!! Form::select('tags',[null => ''] + $tags,$post->tags,['class' => 'form-control','multiple' => 'multiple', 'name' => 'tags[]']) !!}
    </div>
    <div class="form-group">
        {!! Form::checkbox('visible',1,$post->visible,[ 'class' => 'form-check-input' ]) !!}
        {!! Form::label('Visible :',null,['class' => 'form-check-label']) !!}
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Modifier</button>
    </div>
    {!! Form::close() !!}
@stop