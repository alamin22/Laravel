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
	   <li><a href="#" >About Teacher</a></li>
	   <li><a href="#" >Contact Me</a></li>
	</ul>
@endsection

@section('content')
    <center>
	<form action="{{url('/std_view')}}" method="post">
		{{csrf_field()}}
          <input type="text" name="search" placeholder="search by name or roll.." id="search" >
         <input type="submit" value="search"  class="btn btn-success">
   </form>
	<br>
	
	<form>
	@php
	$msg=Session::get('msg');
	if($msg){
		echo "<b class=alert-danger>".$msg."</b>";
		Session::put('msg',null);
	}
	@endphp
	
	<table cellspacing="20" class="table table-hover">
	<tr>
	<th>serial no</th>
	<th>student name</th>
	<th>student roll</th>
	<th>student address</th>
	<th> cgpa</th>
	<th> Teacher Name</th>
	<th>Department</th>
	<th>action</th>
	</tr>
	@foreach($value as $row)
	<tr>
	<td>{{$count++}}</td>
	<td>{{$row->name}}</td>
	<td>{{$row->roll}}</td>
	<td>{{$row->address}}</td>
	<td>{{$row->cgpa}}</td>
	<td>{{$row->Tname}}</td>
	<td>{{$row->dept}}</td>
	<td><a href="{{url('/update_page/'.$row->id)}}">Edit</a> || <a href="{{url('/std_view/'.$row->id)}}">Delete</a></td>
	</tr>
	
	@endforeach
	
	</table>

{{$value->links()}}
	</form>
	</center>
@endsection

@section('footer')
    <p>This is my body footer.</p>
@endsection