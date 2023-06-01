<!DOCTYPE html>
<html>
<head>
  <title>Dashboard {{ $title }}</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <div class="container">
    @include('partials.navbar')

    @yield('container')
  </div>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
