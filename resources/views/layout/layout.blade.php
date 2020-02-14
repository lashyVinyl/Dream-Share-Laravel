<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</head>

<body>

<main class="">

    @yield('content')

</main>

<hr>
<footer class="page-footer">
    <div class="container">
    <div class="row">
            <div class="col-sm-3">
                <h2 class="col-sm-3" style="color: #ff4d4d">Dreamshare</h2>
            </div>
            <div class="col-sm-3">
                <h3 class="">Company</h3>
                    <p>
                        <a href="/" class="text-secondary">About</a>
                    </p>
                    <p>
                        <a href="/" class="text-secondary">Contacts</a>
                    </p>
                    <p>
                        <a href="/" class="text-secondary">Press</a>
                    </p>
                    <p>
                        <a href="/" class="text-secondary">Blog</a>
                    </p>
            </div>
            <div class="col-sm-3">
                <h3 class="">Activities</h3>
                <p>
                    <a href="/" class="text-secondary">Sports</a>
                </p>
                <p>
                    <a href="/" class="text-secondary">Wellness and Health</a>
                </p>
                <p>
                    <a href="/" class="text-secondary">Expeditions</a>
                </p>
                <p>
                    <a href="/" class="text-secondary">Games</a>
                </p>
            </div>
            <div class="col-sm-3">
                <h3 class="">Contact us</h3>
                <p>
                    <a href="/" class="text-secondary">Tel: (000) 000-0000</a>
                </p>
                <p>
                    <a href="/" class="text-secondary">Email: dreamshare@email.com</a>
                </p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
