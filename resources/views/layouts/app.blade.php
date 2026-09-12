<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My Book Site')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>My Book Site</h1>
        <p>Prepared by: Renz Tyron Uchi</p>

        @include('partials._nav')

        @yield('content')
    </div>
</body>
</html>