@extends('teacher.layout.teacher')

@section('content')
    <a href="{{ route('teacherViewCourses') }}">view courses</a>
    <a href="{{ route('teacherStudent') }}">students</a>
    
@endsection