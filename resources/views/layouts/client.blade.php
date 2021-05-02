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
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/styles/a11y-dark.min.css" />
    <style>
        pre > code {
            font-size: .8rem;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    @yield('style')
</head>
<body style="font-size: 1.2rem; font-weight:400; line-height:1.6em;">
    <div id="app" style="color: #35495e">
        <nav class="navbar navbar-light bg-light">
           <div class="container">
                <a class="navbar-brand py-5" href="{{ url('/') }}"><h2>{{ config('app.name', 'Laravel') }}</h2></a>
           </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.10/highlight.min.js"></script>

    <script>
        hljs.initHighlightingOnLoad();
    </script>
</body>
</html>