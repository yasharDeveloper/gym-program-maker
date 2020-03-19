<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-rtl.min.css">
    <script src="../node_modules/jquery/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="@yield('styles')">
    <script src="@yield('js-codes')"></script>

    <title>@yield('title')</title>
</head>
<body>
    @section('sidebar')
        <h3>this is a simple sidebar</h3>

    @show


    @yield('content')



</body>
</html>
