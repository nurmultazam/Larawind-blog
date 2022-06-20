<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>WPU Blog | {{ $title }}</title>
</head>
<body>
    @include('sweetalert::alert')
    @include('partials.navbar')

    <div class="container mt-10 mx-auto px-4">
      @yield('content')
    </div>

    <script src="js/script.js"></script>
</body>
</html>