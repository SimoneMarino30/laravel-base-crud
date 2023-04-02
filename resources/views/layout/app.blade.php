<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME')}} - @yield('page-name')</title>

  {{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>
<body>
  @include('_partials._navbar')
  <main>
    <h1>@yield('page_name')</h1>
    @yield('main_content')
    @yield('show')
  </main>
  @include('_partials._footer')
</body>
</html>