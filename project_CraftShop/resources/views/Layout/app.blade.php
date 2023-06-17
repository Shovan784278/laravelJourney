<!-- app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Your App</title>
   <!-- Include Bootstrap CSS and any other necessary stylesheets -->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
   <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

</head>
<body>
   <header>
      <!-- Your header content goes here -->
   </header>

   <main>
      @yield('content') <!-- This will render the content section of the specific page -->
   </main>

   <footer>
      <!-- Your footer content goes here -->
   </footer>

   <!-- Include Bootstrap JS and any other necessary JavaScript files -->
   <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>
