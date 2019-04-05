<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\redieect;
use Illuminate\support\facades\input;
use DB;
use Session;
session_start();

class practiceController extends Controller
{
  function homepage(){
	return view('home');
}

function addForm(){
	return view('addForm');
}

function insertdata(Request $request){
	$data=array();
	$data['name']=$request->name;
	$data['roll']=$request->roll;
	$data['address']=$request->address;
	$data['cgpa']=$request->cgpa;
	DB::table('std_tbl')->insert($data);
	Session::put('msg','insert successfully');
	return redirect('/addForm');
}
function addTeacher(){
	return view('addTeacher');
}
function teachersData(Request $request){
	$data=array();
	$data['Tname']=$request->Tname;
	$data['roll']=$request->roll;
	$data['dept']=$request->dept;
	DB::table('teachers')->insert($data);
	Session::put('msg','insert successfully');
	return redirect('/addTeacher');
}
function std_view(){
	$count=1;
	$view=DB::table('std_tbl')
	->leftjoin('teachers','std_tbl.roll','=','teachers.roll')
	->select('std_tbl.*','teachers.Tname','teachers.dept')
	->orderBy('cgpa','desc')
	->paginate(3);
	return view('std_view',['count'=>$count])->with('value',$view);
}
function search(){ 
    $count=1;
	$search_value=input::get('search');
	$view=DB::table('std_tbl')
	->leftjoin('teachers','std_tbl.roll','=','teachers.roll')
	->select('std_tbl.*','teachers.Tname','teachers.dept')
	->where('std_tbl.roll','LIKE','%'.$search_value.'%')
	->orwhere('std_tbl.name','LIKE','%'.$search_value.'%')
	->paginate(3);
	return view('std_view',['count'=>$count])->with('value',$view);
}
function deleteData($id){
	$view=DB::table('std_tbl')
    ->where('id',$id)
	->delete();
	Session::put('msg','Delete successfully');
	return redirect('/std_view');
}
function update_page($id){
	$view=DB::table('std_tbl')
	->where('id',$id)
	->get();
	return view('update_page')->with('value',$view);
}
function update_data(Request $request,$id){
	$data=array();
	$data['name']=$request->name;
	$data['roll']=$request->roll;
	$data['address']=$request->address;
	$data['cgpa']=$request->cgpa;
	DB::table('std_tbl')
	->where('id',$id)
	->update($data);
	Session::put('msg','update successfully');
	return redirect('/std_view');
}

}
