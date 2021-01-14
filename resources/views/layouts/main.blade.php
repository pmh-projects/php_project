<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
<div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="/main_page">Active</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/find">Find</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="form">Form</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="about">About</a>
    </li>
  </ul>
  <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                                                                                    <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/login">Login</a>
                                </li>
                                                        
                                                            <li class="nav-item">
                                    <a class="nav-link" href="http://127.0.0.1:8000/register">Register</a>
                                </li>
                                                                        </ul>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1>Bootstrap Tutorial</h1>      
    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
  </div>
</div>

<div class="container">
@yield('tresc')    
</div>
  

    <footer
        id="footer"
        class="d-flex justify-content-center">
        <p>Projekt Zaliczeniowy 2021</p>
    </footer>

</body>
</html>