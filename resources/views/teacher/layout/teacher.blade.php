<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Teacher</title>
</head>
<body class="bg-gradient-to-r from-blue-200 to-green-200">
    <div class="relative min-h-screen flex shadow-2xl">

        {{-- sidebar --}}
        <div class="bg-gray-200 text-gray-500 w-64 px-5">
            {{-- logo --}}
            
            <div class="text-2xl font-extrabold py-2 text-center">IICA</div>
            <div class="text-xl font-extrabold text-center">Teacher</div>

            <nav class="py-2">
                <a href="{{ route('teacherHome') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-400 hover:text-white">
                      Home
                </a>
                <a href="{{ route('teacherStudentControl') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-400 hover:text-white">
                  Students
                </a>
                <a href="{{ route('teacherViewCourses') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-400 hover:text-white">
                  Courses
                </a>
              </nav>
              <a href="{{ route('logout') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-400 hover:text-white bottom-0 left-4 bottom-0">LogOut</a>

            {{-- navbar --}}

        </div class="">
            
        {{-- content --}}
        <div class="w-full">
            <div class="bg-gradient-to-r from-green-400 to-blue-500 p-6 flex justify-between text-3xl text-white">Student Information Management System</div>
            @yield('content')
        </div>

    </div>
</body>
</html>