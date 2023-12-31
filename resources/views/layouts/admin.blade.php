<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    <title>@yield('title') | Administration</title>
</head>

<body>
    @include('layouts.includes.navbar')

    <div class="container mt-5">
        @yield('content')
    </div>
</body>

</html>
