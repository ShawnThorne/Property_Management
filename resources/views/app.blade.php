<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    @inertiaHead
  </head>
  <body>
    @inertia
  </body>
</html>
