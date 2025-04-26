<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DRE COMPUTER CENTER')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('image/dre logo.png') }}">
</head>
<body style="padding-bottom: 60px;">
    <header class="navbar bg-body-tertiary">
        <div class="d-flex justify-content-between w-100">
            <a class="navbar-brand" href="#">
            <a href="{{ route('main') }}">
                <img src="{{ asset('image/monitor/dre logo.png') }}" alt="DRELOGO" width="200" height="125" class="d-inline-block align-text-top">
            </a>
            </a>
            <ul class="nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ url('build') }}">BUILD YOUR PC</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PACKAGE/PROMO</a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ url('package') }}">DESKTOP PACKAGE</a></li>
                    <li><a class="dropdown-item" href="{{ url('pisonet') }}">PISONET</a></li>
                    <li><a class="dropdown-item" href="{{ url('laptop') }}">BRANDNEW & REFURBISHED LAPTOP</a></li>
                    <li><a class="dropdown-item" href="{{ url('printer') }}">PRINTER</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('about') }}">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('contact') }}">CONTACT US</a>
                </li>
            </ul>
        </div>
    </header>

    <section>
        @yield('content')
    </section>

    <footer class="bg-dark text-white text-center py-3 mt-auto position-fixed bottom-0 w-100">
        <p>&copy; 2025 EybiDev. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
