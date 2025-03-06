<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>
<body>
<header>
        <nav>
            <a href="{{ url('/')}}">Home</a>
            <a href="{{ url('/Workoutplan')}}">Workout Plans</a>
            <a href="{{ url('/subscribe')}}">Subscribe</a>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>