<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- стили для кнопки destroy(delete) -->
    <style>
    form {
      display: inline;
    }
    form button {
      background: transparent;
      padding: 0px;
      border: 0px;
    }
    form button span {
      color: #337AB7;
    }
    </style>
  </head>
  <body>
    @yield('content')
  </body>
</html>
