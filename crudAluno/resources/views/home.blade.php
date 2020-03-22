<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trabalho faculdade</title>
    <link rel="stylesheet" href="{{ asset('site/bootstrap.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
            <a class="navbar-brand" href="#">Trabalho topicos especiais</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">Curso </a>
                    <a class="nav-item nav-link" href="/instrutor">Instrutores</a>
                    <a class="nav-item nav-link" href="#">Matriculas</a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
    <script src="{{ asset('site/bootstrap.js') }}" />
    <script type="javascript">

    </script>
</html>
