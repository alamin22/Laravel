@extends('layout.mainpage')

@section('title', 'laravelPage')

@section('menubar')
   <p>Student Management System</p>
@endsection

@section('sidebar')
    <ul>
	   <li><a href="{{url('/home')}}" >Home</a></li>
	   <li><a href="{{url('/addForm')}}" >Student Add</a></li>
	   <li><a href="{{url('/std_view')}}" >View Student</a></li>
	   <li><a href="{{url('/addTeacher')}}" >Add Teacher</a></li>
	   <li><a href="#" >About Teacher</a></li>
	   <li><a href="#" >Contact Me</a></li>
	</ul>
@endsection

@section('content')
 <center>
    <h2>Insert student data</h2>
	@php
	$msg=Session::get('msg');
	if($msg){
		echo "<b class=alert-success>".$msg."</b>";
		Session::put('msg',null);
	}
	@endphp
	<form action="{{url('/insertdata')}}" method="post" class="form-group">
	{{csrf_field()}}
	<table>

	<tr><td><br>Name : </td>
     <td><br> <input type="text" name="name" class="form-control"></td></tr>
	 <tr><td><br>Roll : </td>
      <td><br><input type="text" name="roll" class="form-control"></td></tr>
	  <tr><td><br>address : </td>
      <td><br> <input type="text" name="address" class="form-control"></td></tr>
	   <tr><td><br>cgpa : </td>
       <td><br><input type="text" name="cgpa" class="form-control"></td></tr>
	   <tr><td></td>
      <td> <br><input type="submit" name="addvalue" value="Insert" class="btn btn-success"></td></tr>
	   </table>
    </form>
	</center>
@endsection

@section('footer')
    <p>This is my body footer.</p>
@endsection