@extends('layout')

@section('content')

    <h1>Page de création de lien</h1>

    <form action="" method="post">

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label>Veuillez entrer votre nouveau lien</label>
            <input class="form-control" type="text" name="link">
        </div>
        <div class="form-group">
            <input class="btn btn-success float-right" type="submit" name="submit" value="envoyer">
        </div>
    </form>

@endsection
