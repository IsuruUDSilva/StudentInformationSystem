@extends('admin.layout.admin')

@section('content')
<div>
    
</div>

<div class="p-20 ">
    <main class=" bg-white  mx-auto p-8 md:p-6 my-0 rounded-lg shadow-2xl">
        <table class="border-red-600 w-full">
        <tr class="bg-gray-300">
        <th class="border px-4 py-6">Id</th>
        <th class="border px-4 py-6">Name</th>
        <th class="border px-4 py-6">Email</th>
        <th class="border px-4 py-6">City</th>
        <th class="border px-4 py-6">Address</th>
        <th class="border px-4 py-6">Date Of Birth</th>
        <th class="border px-4 py-6"></th>
        </tr>
        @foreach ($users as $user)
        <tr class="bg-gray-200">
        <td class="border px-4 py-6">{{ $user->id }}</td>
        <td class="border px-4 py-6">{{ $user->name }}</td>
        <td class="border px-4 py-6">{{ $user->email }}</td>
        <td class="border px-4 py-6">{{ $user->city }}</td>
        <td class="border px-4 py-6">{{ $user->address }}</td>
        <td class="border px-4 py-6">{{ $user->dob }}</td>
        <td><a href = 'editTeacher/{{ $user->id }}' class="flex flex-col text-center py-2.5 px-4 rounded transition duration-200 hover:bg-blue-400 hover:text-white bottom-0 left-4">Edit</a></td>
        </tr>
        @endforeach
        </table>
        <div class="mt-10">
            <a href="{{ route('adminAddMember') }}" class=" py-2.5 px-4 rounded transition duration-200 hover:bg-green-400 hover:text-white bottom-0 left-4 ">Add a Teacher</a>
        </div>
    </main>
</div>
@endsection