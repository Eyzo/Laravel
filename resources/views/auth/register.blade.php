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

<form class="form-signin" method="post" action="{{ route('register.create') }}">

    @include('form/error')
    @include('form/success')


    @csrf

    <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Création de comtpe</h1>

    <div class="form-group">
        <label for="inputName" class="sr-only">Nom</label>
        <input type="text" id="inputName" class="form-control" placeholder="Votre nom..." name="name" required autofocus>
    </div>

    <div class="form-group">
        <label for="inputEmail" class="sr-only">Adresse Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Votre email..." name="email" required autofocus>
    </div>

    <div class="form-group">
        <label for="inputPassword" class="sr-only">Mot de passe</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Votre mot de passe..." name="password" required>
    </div>

    <div class="form-group">
        <label for="inputRepeatPassword" class="sr-only">Répéter le mot de passe</label>
        <input type="password" id="inputRepeatPassword" class="form-control" placeholder="Veuillez resaisir votre mot de passe..." name="repeat" required>
    </div>

    <button class="btn btn-lg btn-primary btn-block" type="submit">Créer</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
</form>
</body>
</html>