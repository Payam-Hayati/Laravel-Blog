<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>How to Install Tailwind CSS 3 in Laravel 9 With Vite 3 - iTsir.ir</title>

  @vite('resources/js/app.js')
</head>

<body data-rsssl=1 class="antialiased">
  <div class="container">
    <h1>Index Method Of Blogs</h1>
    <p>
      {{ $posts }}
    </p>
  </div>
</body>

</html>