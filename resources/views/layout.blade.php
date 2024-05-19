<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="/filiere" class="nav-link">Filiere</a></li>
            <li class="nav-item"><a href="/groupe" class="nav-link">Groupe</a></li>
            <li class="nav-item"><a href="" class="nav-link">Stagiaire</a></li>
        </ul>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
</body>
</html>