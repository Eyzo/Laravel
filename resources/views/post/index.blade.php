@extends('layout')


@section('content')

    <a class="btn btn-success" href="{{ route('news.create') }}">Ajouter un article</a>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Slug</th>
            <th width="300px">Content</th>
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->slug }}</td>
                <td>{{ substr($post->content ,0,100).'...' }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('news.show',['news' => $post ]) }}">Voir</a>
                    <a class="btn btn-primary" href="{{ route('news.edit',['news' => $post ]) }}">Editer</a>
                    {!! Form::open(array('method' => 'DELETE','route' => array('news.destroy',$post->id))) !!}
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    {!! Form::close() !!}

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop