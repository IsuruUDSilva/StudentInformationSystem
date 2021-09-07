@extends('teacher.layout.teacher')

@section('content')
<div class="p-20">
    <main class="bg-white  mx-auto p-8 md:p-6 my-0 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl">Edit Student</h3>
           {{-- {{  dd($user->id) }} --}}
        </section>
        <section class="mt-6">
            <form action="/teacherEditStudent/{{ $user->id }}" method="POST" class="flex flex-col">
                @csrf
                <input type="hidden" name="role_id" value="{{ $user->role_id }}">
                

                <div class="mb-6 pt-3 bg-gray-200 rounded-lg border-b-4 border-gray-300 focus:border-purple-400 transition duration-500 ">
                    {{-- <label  for="city" class="block text-gray-700 text-sm font-bold mb-2 ml-3">City</label> --}}
                    <fieldset class="block text-gray-700 text-sm font-bold mb-2 ml-3 " > 
                        <legend>Active or Inactive?</legend>
                    
                        <input type="radio" id="active" value='1' name="active">
                        <label for="active">Active</label><br/>
                    
                        <input type="radio" id="inactive" value="0" name="active">
                        <label for="inactive">Inactive</label><br/>

                    
                      </fieldset>
                    
                    
                </div>
                
                
                <button class=" py-2.5 px-4 rounded transition duration-200 hover:bg-green-400 hover:text-white bottom-0 left-4" type="submit">Update</button>
            </form>
            {{-- <form action="" class="flex flex-col">
                <a href="/deleteStudent/{{ $user->id }}" class="text-center py-2.5 px-4 rounded transition duration-200 hover:bg-red-400 hover:text-white bottom-0 left-4">Delete Student</a>
            </form> --}}

            
        </section>
    </main>
</div>
@endsection