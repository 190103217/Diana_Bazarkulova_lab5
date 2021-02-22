<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentcontroller extends Controller
{
    public function get_students(){
	static $students = array(0=> "Diana",1=> "Nazgul");
	return $students;

	}
	public function index($id){
	$students=$this->get_students();
	return view('StudentName',["name"=>$students[$id]]);
	}

	public function index1($date){
	return view('StudentDate')->with('date',$date);
	}

	public function index2($age){
	return view('StudentAge',compact('age'));
	}
}
