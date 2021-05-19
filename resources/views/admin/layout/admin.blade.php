<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Admin</title>
</head>
<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between mb-6">
        <ul class="flex items-center">
            <li>
                <a href="{{ route('adminHome') }}">Home</a>
            </li>
        </ul>
        <ul>
            <li>ADMIN</li>
        </ul>
        <ul class="flex items-center">
            <li>
                <a href="">Logout</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>
</html>