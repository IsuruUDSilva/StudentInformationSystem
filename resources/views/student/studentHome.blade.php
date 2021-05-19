@extends('student.layout.student')

@section('content')

    <a href="{{ route('studentViewCourses') }}">Courses</a>
    <a href="{{ route('studentAddCourses') }}">Add Courses</a>
@endsection