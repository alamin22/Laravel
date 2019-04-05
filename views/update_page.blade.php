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
    <h2>Update student data</h2>
	@php
	$msg=Session::get('msg');
	if($msg){
		echo "<b class=alert-success>".$msg."</b>";
		Session::put('msg',null);
	}
	@endphp
	
	@foreach($value as $row)
	<form action="{{url('/update_page/'.$row->id)}}" method="post" class="form-group">
	{{csrf_field()}}

	<table>
	<tr><td><br>Name : </td>
     <td><br> <input type="text" value="{{$row->name}}" name="name" class="form-control"></td></tr>
	 <tr><td><br>Roll : </td>
      <td><br><input type="text" value="{{$row->roll}}" name="roll" class="form-control"></td></tr>
	  <tr><td><br>address : </td>
      <td><br> <input type="text" value="{{$row->address}}" name="address" class="form-control"></td></tr>
	   <tr><td><br>cgpa : </td>
       <td><br><input type="text" value="{{$row->cgpa}}" name="cgpa" class="form-control"></td></tr>
	   <tr><td></td>
      <td> <br><input type="submit" name="addvalue" value="Update" class="btn btn-success"></td></tr>
	   </table>
	 	    
    </form>
	@endforeach
	</center>
@endsection

@section('footer')
    <p>This is my body footer.</p>
@endsection