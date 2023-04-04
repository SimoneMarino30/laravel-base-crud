<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME')}} - @yield('page-name')</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')

  @yield('cdn')
</head>
<body class="bg-body-dark ">
  @include('_partials._navbar')
  <main class="container text">
    {{-- <h1>@yield('page_name')</h1> --}}
    @yield('main_content')
    
  </main>
  @include('_partials._footer')

  @yield('modals')
</body>
</html>