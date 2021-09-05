@extends('admin.layout.admin')

@section('content')
<div>
    <main class=" bg-white max-w-lg mx-auto p-8 md:p-12 my-6 rounded-lg shadow-2xl">
        <section>
            {{-- <h3 class="font-bold text-2xl">Welcome</h3> --}}
            <p class="text-gray-700">Enter student's details here</p>
        </section>
        <section class="mt-6">
            <form action="{{ route('register') }}" method="POST" class="flex flex-col">
                @csrf
                <div class="mb-6 pt-3 bg-gray-200 rounded-lg ">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Full name</label>
                    <input type="text" name="name" id="name" value="" class="bg-gray-200 rounded-lg w-full focus:outline-none border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 px-3 pb-3 @error('name') border-red-500 @enderror" >
                </div>
                <div class="mb-6 pt-3 bg-gray-200 rounded-lg ">
                    <label for="address" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Address</label>
                    <input type="text" name="address" id="adress" value="" class="bg-gray-200 rounded-lg w-full focus:outline-none border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 px-3 pb-3 @error('address') border-red-500 @enderror" >
                   
                </div>
                <div class="mb-6 pt-3 bg-gray-200 rounded-lg border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 @error('city') border-red-500 @enderror ">
                    {{-- <label  for="city" class="block text-gray-700 text-sm font-bold mb-2 ml-3">City</label> --}}
                    <fieldset class="block text-gray-700 text-sm font-bold mb-2 ml-3 "> 
                        <legend>Choose your class city</legend>
                    
                        <input type="radio" id="ambalangoda" value='ambalangoda' name="city">
                        <label for="ambalangoda">Ambalangoda</label><br/>
                    
                        <input type="radio" id="galle" value="galle" name="city">
                        <label for="sasquatch">Galle</label><br/>
                    
                        <input type="radio" id="kaluthara" value="kaluthara" name="city">
                        <label for="mothman">Kaluthara</label>
                      </fieldset>
                    
                    
                </div>
                <div class="mb-6 pt-3 bg-gray-200 rounded-lg ">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                    <input type="email" name="email" id="email" value="" class="bg-gray-200 rounded-lg w-full focus:outline-none border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 px-3 pb-3 @error('email') border-red-500 @enderror" >
                

                </div>
                <div class="mb-6 pt-3 bg-gray-200 rounded-lg ">
                    <label for="dob" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Date of birth</label>
                    <input type="date" name="dob" id="dob" class="bg-gray-200 rounded-lg w-full focus:outline-none border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 px-3 pb-3 @error('dob') border-red-500 @enderror" >
                
                </div>

                <div class="mb-6 pt-3 bg-gray-200 rounded-lg border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 ">
                    {{-- <label  for="city" class="block text-gray-700 text-sm font-bold mb-2 ml-3">City</label> --}}
                    <fieldset class="block text-gray-700 text-sm font-bold mb-2 ml-3 "> 
                        <legend>Choose type</legend>
                    
                        <input type="radio" id="teacher" value='2' name="role_id">
                        <label for="teacher">Teacher</label><br/>
                    
                        <input type="radio" id="student" value="3" name="role_id">
                        <label for="student">Student</label><br/>
                    
                        {{-- <input type="radio" id="kaluthara" value="kaluthara" name="city">
                        <label for="mothman">Kaluthara</label> --}}
                      </fieldset>
                    
                    
                </div>
                {{-- <div class="mb-6 pt-3 bg-gray-200 rounded-lg ">
                    <label for="userName" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Username</label>
                    <input type="text" name="username" id="UserName" class="bg-gray-200 rounded-lg w-full focus:outline-none border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 px-3 pb-3 @error('userName') border-red-500 @enderror" >
                
                </div> --}}
                <div class="mb-6 pt-3 bg-gray-200 rounded-lg">
                    <label for="passWord" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
                    <input type="password" name="password" id="passWord" value="P@ssW0rd" class="bg-gray-200 rounded-lg w-full focus:outline-none border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 px-3 pb-3 @error('passWord') border-red-500 @enderror">
                
                </div>
                
                <button class="transition duration-200 hover:bg-green-400 hover:text-white px-full py-1 rounded-lg" type="submit">Add Student</button>
            </form>
            {{-- <div class="p-4 flex justify-center">
                <span class="mr-2">Do you have an Account?</span>
                <span class="text-blue-400 hover:text-green-400"><a href="{{ route('welcome') }}">login</a></span> --}}
            </div>
        </section>
    </main>
</div>
@endsection