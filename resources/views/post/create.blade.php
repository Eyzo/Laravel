@extends('theme/layoutAdmin')

@section('content')

    {!! Form::open(['method' => 'POST','route' => ['news.store']]) !!}

    <div class="form-group">
        {!! Form::label('Titre :') !!}
        {!! Form::text('title',null, [ 'class' => 'form-control']) !!}


    </div>
    <div class="form-group">
        {!! Form::label('Slug :') !!}
        {!! Form::text('slug',null, [ 'class' => 'form-control' ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Content :') !!}
        {!! Form::textarea('content',null, ['class' => 'form-control' ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Categorie :') !!}
        {!! Form::select('category_id',[null => ''] + $categories,null,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Tags :') !!}
        {!! form::select('tags',[null => ''] + $tags,null,['class' => 'form-control','multiple' => 'multiple', 'name' => 'tags[]']) !!}
    </div>
    <div class="form-group">
        {!! Form::checkbox('visible',1,null,['class' => 'form-check-input']) !!}
        {!! Form::label('Visible :',null,['class' => 'form-check-label']) !!}
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Ajouter</button>
    </div>
    {!! Form::close() !!}

@stop