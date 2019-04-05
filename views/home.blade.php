@extends('layout.mainpage')

@section('title', 'laravelPage')

@section('menubar')
   <p>Student Management System</p>
@endsection

@section('sidebar')
    <ul>
	   <li><a href="{{url('/home')}}" >Home</a></li>
	   <li><a href="{{url('/addForm')}}">Student Add</a></li>
	   <li><a href="{{url('/std_view')}}" >View Student</a></li>
	   <li><a href="{{url('/addTeacher')}}" >Add Teacher</a></li>
	   <li><a href="#" >About Teacher</a> </li>
	   <li><a href="#" >Contact Me</a></li>
	</ul>

@endsection

@section('content')
   <center> <h1>This is my home page</h1></center>
@endsection

@section('footer')
    <p>This is my body footer.</p>
@endsection