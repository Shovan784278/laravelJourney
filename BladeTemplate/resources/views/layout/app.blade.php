<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- Add any additional meta tags, CSS or JavaScript files here -->
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
</head>
<body>
    <!-- Your content goes here -->
    @include('layout.header')

    @yield('content')

    @include('layout.footer')
    <script src="{{asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <!-- Add any additional JavaScript files or inline scripts here -->
</body>
</html>
