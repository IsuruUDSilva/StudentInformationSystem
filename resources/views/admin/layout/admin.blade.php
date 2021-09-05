<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Admin</title>
</head>
<body class="bg-gradient-to-r from-blue-200 to-green-200">

    <div class="relative min-h-screen flex">

        {{-- sidebar --}}
        <div class="bg-gray-200 text-gray-500 w-64 px-5 shadow-2xl">
            {{-- logo --}}
            {{-- <a href="#"><img src="\public\images\logo.png" alt=""></a> --}}
            {{-- <span class="text-2xl font-extrabold">IICA</span>
            <span class="text-xl font-extrabold">Administrator</span> --}}
            <div class="text-2xl font-extrabold py-2 text-center">IICA</div>
            <div class="text-xl font-extrabold text-center">Administrator</div>

            <nav class="py-2">
                <a href="{{ route('adminHome') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-400 hover:text-white">
                    {{-- <span><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg></span>   --}}
                      Home
                </a>
                <a href="{{ route('adminTeacher') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-400 hover:text-white">
                  Teachers
                </a>
                <a href="{{ route('adminStudent') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-400 hover:text-white">
                  Students
                </a>
                <a href="{{ route('adminCourses') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-blue-400 hover:text-white">
                  Courses
                </a>
              </nav>

              <a href="{{ route('logout') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:bg-red-400 hover:text-white bottom-0 left-4 bottom-0">LogOut</a>
              
            {{-- navbar --}}

        </div>
            
        {{-- content --}}
        <div class="w-full">
            <div class="bg-gradient-to-r from-green-400 to-blue-500 p-6 flex justify-between text-3xl text-white">Student Information Management System</div>
            @yield('content')
        </div>

    </div>
    {{-- <nav class="p-6 bg-white flex justify-between mb-6">
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
    </nav> --}}

    
</body>
</html>