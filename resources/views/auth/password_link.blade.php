<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
</head>
<body class="text-center">

@if($errors->any())
    <div style="width: 80%;margin: auto">
        @include('form/error')
        @include('form/success')
        <h1 style="text-align: center">Erreur le token est incorrect</h1>
    </div>
@else
    @include('form/error')
    @include('form/success')
    <form class="form-signin" method="post" action="{{ route('password.link.reset.post',[ 'token' => $token ]) }}">

        @csrf

        <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Changement de mot de passe</h1>


        <div class="form-group">
            <label for="new-password" class="sr-only">Nouveau mot de passe</label>
            <input type="password" id="new-password" class="form-control" name="password" placeholder="Mot de passe" required autofocus>
        </div>

        <div class="form-group">
            <label for="repeat-password" class="sr-only">Répéter nouveau mot de passe</label>
            <input type="password" id="repeat-password" class="form-control" name="password-repeat" placeholder="Répeter le mot de passe" required autofocus>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Enregistrer</button>
    </form>
@endif

</body>
</html>