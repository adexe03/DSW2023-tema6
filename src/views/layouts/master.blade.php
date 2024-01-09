<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>APPCAR: @yield('title')</title>
  <style>
    nav {
      background-color: lightcoral;
    }

    footer {
      background-color: lightcoral;
    }
  </style>
</head>

<body>
  <nav>Menú</nav>
  <header>
    <h1>Título de la aplicación</h1>
    <h2>@yield('subtitle')</h2>
  </header>
  <hr>
  <main>
    @section('container')
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore corporis, qui officiis magnam laudantium ipsum consequatur distinctio animi iure explicabo quas non accusamus porro tenetur. Dolore quisquam iure itaque eos!</p>
    @show
  </main>
  <footer>
    <p>IES Las Galletas &copy;2024</p>
  </footer>
</body>

</html>