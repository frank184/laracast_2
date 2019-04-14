<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Laracast 2')</title>
  </head>
  <body>
    <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/projects">Projects</a></li>
    </ul>
    
    @yield('content')
  </body>
</html>
