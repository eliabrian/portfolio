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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.22.0/themes/prism-tomorrow.min.css" integrity="sha512-vswe+cgvic/XBoF1OcM/TeJ2FW0OofqAVdCZiEYkd6dwGXthvkSFWOoGGJgS2CW70VK5dQM5Oh+7ne47s74VTg==" crossorigin="anonymous" />
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.22.0/prism.min.js" integrity="sha512-9+422Bs3A87UkWfp+qV80Nfv9arhbCXKY1rxrF2seorI36mIIstMiuBfyKLF1yH1nnzQkEWq2xrzT4XU3Z+vrA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.22.0/components/prism-php.min.js" integrity="sha512-yPrXSLcjHpSl8cnmaKvBpWbYNgMNZp4M0GK36bUf6+/aZOkpQbmHznrRgFxDZ3efy0VoVx2MebfwJqjYHbQ1JQ==" crossorigin="anonymous"></script>

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
</body>
</html>