@extends('admin.layout.admin')

@section('content')



<div class="p-20 ">
        <table class="border-red-600 w-full">
        <tr class="bg-gray-300">
        <th class="border px-4 py-6">Id</th>
        <th class="border px-4 py-6">Name</th>
        <th class="border px-4 py-6">Email</th>
        <th class="border px-4 py-6">City</th>
        <th class="border px-4 py-6">Address</th>
        <th class="border px-4 py-6">Date Of Birth</th>
        </tr>
        @foreach ($users as $user)
        <tr class="bg-gray-200">
        <td class="border px-4 py-6">{{ $user->id }}</td>
        <td class="border px-4 py-6">{{ $user->name }}</td>
        <td class="border px-4 py-6">{{ $user->email }}</td>
        <td class="border px-4 py-6">{{ $user->city }}</td>
        <td class="border px-4 py-6">{{ $user->address }}</td>
        <td class="border px-4 py-6">{{ $user->dob }}</td>
        </tr>
        @endforeach
        </table>
        <div class="mt-10">
            <a href="{{ route('adminAddStudent') }}" class=" py-2.5 px-4 rounded transition duration-200 hover:bg-green-400 hover:text-white bottom-0 left-4 ">Add a Student</a>
        </div>
</div>


@endsection