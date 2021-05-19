@extends('admin.layout.admin')

@section('content')
    <a href="{{ route('adminTeacher') }}" class="text-6xl p-10">Teacher</a>
    <a href="{{ route('adminStudent') }}" class="text-6xl p-10">Student</a>
    <a href="{{ route('adminCourses') }}" class="text-6xl p-10">Courses</a>

@endsection