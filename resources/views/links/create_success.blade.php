@extends('layout')

@section('content')

    <h1>Felicitation vous venez de créer votre lien</h1>

    <a href="{{ route('link.show.unique', ['id' => $link->id]) }}" class="btn btn-primary">Cliquez ici pour voir le lien</a>

@endsection
