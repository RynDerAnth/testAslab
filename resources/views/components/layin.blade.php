<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('img/Logo_IFLAB.png') }}" alt="Logo IFLAB" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler"
                aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tentang kami</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    {{ Auth::user()->name }}
                    <a class="btn btn-outline-success" href="{{ route('logout') }}">Logout</a>
                </form>
            </div>
        </div>
    </nav>
    {{ $slot }}
    <footer class="container-fluid" style="background-color: blue; text-align:center; color: white">
        <div>
            <p>&copy; 2024 Rayyn Derya Anthares. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
