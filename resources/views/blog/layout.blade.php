<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf8_unicode_ci">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog</title>

    <!-- Bootstrap core CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('stylesheets/styles.css') }}">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Blog podróżniczy</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Strona główna</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">O nas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Kontakt</a>
                </li>
                @if (auth()->user() !== null)
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/admin') }}">Panel administracyjny</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<hr>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <p class="copyright text-muted">Copyright &copy; Blog podróżniczy {{ date('Y') }}</p>
                <p class="copyright text-muted">Damian Nowak, Jacek Kopka</p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" crossorigin="anonymous"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"></script>

<!-- Custom scripts for this template -->
<script src="{{ asset('javascripts/script.js') }}"></script>

</body>
</html>