<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gradient-to-r from-blue-400 to-green-400">
        <nav class="bg-gradient-to-r from-green-400 to-blue-500 p-6 flex justify-between ">
            <ul class="flex item-center">
                <li class="text-white text-3xl">
                    Student Information Management System
                </li>
            </ul>
        </nav>
        <div class="flex justify-center">
            <div class="w-6/12 m-6 ">
                <div class="">
                    <p class="text-2xl">About Us</p>
                </div>
                <div class="my-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus condimentum tincidunt lorem, et mattis velit tincidunt a. Donec in rutrum enim. Fusce eleifend dui eget ligula feugiat, nec aliquam turpis vehicula. Nullam et euismod eros, a pharetra metus. Nulla gravida est vitae cursus lobortis. Duis et lorem viverra, varius tellus eu, imperdiet turpis. Morbi imperdiet ligula eu massa maximus sodales. Ut sit amet consectetur urna. Duis a posuere ante. Aenean egestas hendrerit orci ut posuere. Vestibulum mollis sodales blandit. Duis quis hendrerit justo, vel pretium dolor. </p>
                    <p> Donec nec mi varius, vehicula mauris nec, gravida sem. Integer lacinia enim vitae augue auctor molestie. Mauris ultricies elit et elit suscipit, et commodo lacus interdum. In cursus quam iaculis, laoreet diam sit amet, pretium lorem. Vivamus laoreet nec ligula ac porta. Aenean eget sapien magna. Suspendisse hendrerit lectus nibh, ultrices sollicitudin felis pellentesque nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam vel nisl ac nunc ullamcorper pretium. Suspendisse gravida consectetur varius.</p>
                </div>
                <div class="">
                    <p class="text-2xl">Vision</p>
                </div>
                
                <div class="my-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus condimentum tincidunt lorem, et mattis velit tincidunt a. Donec in rutrum enim. Fusce eleifend dui eget ligula feugiat, nec aliquam turpis vehicula. Nullam et euismod eros, a pharetra metus. Nulla gravida est vitae cursus lobortis. Duis et lorem viverra, varius tellus eu, imperdiet turpis. Morbi imperdiet ligula eu massa maximus sodales. Ut sit amet consectetur urna. Duis a posuere ante. Aenean egestas hendrerit orci ut posuere. Vestibulum mollis sodales blandit. Duis quis hendrerit justo, vel pretium dolor. </p>
                    <p> Donec nec mi varius, vehicula mauris nec, gravida sem. Integer lacinia enim vitae augue auctor molestie. Mauris ultricies elit et elit suscipit, et commodo lacus interdum. In cursus quam iaculis, laoreet diam sit amet, pretium lorem. Vivamus laoreet nec ligula ac porta. Aenean eget sapien magna. Suspendisse hendrerit lectus nibh, ultrices sollicitudin felis pellentesque nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam vel nisl ac nunc ullamcorper pretium. Suspendisse gravida consectetur varius.</p>    
                </div>
                
            <div class="">
                <p class="text-2xl ">Mission</p>
            </div>
            <div class="my-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus condimentum tincidunt lorem, et mattis velit tincidunt a. Donec in rutrum enim. Fusce eleifend dui eget ligula feugiat, nec aliquam turpis vehicula. Nullam et euismod eros, a pharetra metus. Nulla gravida est vitae cursus lobortis. Duis et lorem viverra, varius tellus eu, imperdiet turpis. Morbi imperdiet ligula eu massa maximus sodales. Ut sit amet consectetur urna. Duis a posuere ante. Aenean egestas hendrerit orci ut posuere. Vestibulum mollis sodales blandit. Duis quis hendrerit justo, vel pretium dolor. </p>
                <p> Donec nec mi varius, vehicula mauris nec, gravida sem. Integer lacinia enim vitae augue auctor molestie. Mauris ultricies elit et elit suscipit, et commodo lacus interdum. In cursus quam iaculis, laoreet diam sit amet, pretium lorem. Vivamus laoreet nec ligula ac porta. Aenean eget sapien magna. Suspendisse hendrerit lectus nibh, ultrices sollicitudin felis pellentesque nec. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nullam vel nisl ac nunc ullamcorper pretium. Suspendisse gravida consectetur varius.</p>
            </div>
            </div>
            <div class="w-4/12">
                <main class=" bg-white max-w-lg mx-auto p-8 md:p-12 my-6 rounded-lg shadow-2xl">
                    <section>
                        <h3 class="font-bold text-2xl">Welcome</h3>
                        <p class="text-gray-700">Sign in to your account</p>
                    </section>
                    <section class="mt-6">
                        <form action="#" method="POST" class="flex flex-col">
                            <div class="mb-6 pt-3 bg-gray-200 rounded-lg ">
                                <label for="userName" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Username</label>
                                <input type="text" name="username" id="UserName" class="bg-gray-200 rounded-lg w-full focus:outline-none border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 px-3 pb-3" >
                            </div>
                            <div class="mb-6 pt-3 bg-gray-200 rounded-lg">
                                <label for="passWord" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                                <input type="password" name="passWord" id="passWord" class="bg-gray-200 rounded-lg w-full focus:outline-none border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 px-3 pb-3">
                            </div>
                            <div class="flex justify-end">
                                <a href="#" class="mb-3 text-blue-400 hover:text-green-400">Forgot your password?</a>
                            </div>
                            <button class="bg-gradient-to-r from-green-400 to-blue-400 hover:from-pink-500 hover:to-yellow-500 px-full py-1 rounded-lg" type="submit">Sign In</button>
                        </form>
                        <div class="p-4 flex justify-center">
                            <span class="mr-2">Don't have an Account?</span>
                            <span class="text-blue-400 hover:text-green-400"><a href="{{ route('register') }}">Create account</a></span>
                        </div>
                    </section>
                </main>
                
            </div>
            
        </div>
        <footer class="max-w-lg mx-auto flex justify-center text-white p-6 mb-12">
            <a href="#">Contact Us</a>
            <span class="mx-3">~</span>
            <a href="#">Privacy</a>
        </footer>
        
    </body>
</html>
