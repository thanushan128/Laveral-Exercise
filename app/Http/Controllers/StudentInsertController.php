<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudentInsertController extends Controller
{
    public function student_list(){
        $students = DB::select('select * from student');
        return view('student_list', ['students'=>$students]);
    }

    public function insert_form(){
        return view('insert_form');
    }

    public function insert(Request $request){
        $name = $request->input('student_name');

        // insert operation
        // DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        DB::insert('insert into student (name) values (?)', [$name]);
        return "Record inserted sucessfully <a href='/'>Click here to go back </a>";
    }

    public function edit($id){
        $student = DB::select('select * from student where id = ?', [$id]);
        return view('student_edit',['student'=> $student]);
    }

    public function update(Request $request,$id){
        $name = $request->input('student_name');
        DB::update('update student set name =? where id = ?', [$name,$id]);
        return "Record update sucessfully <a href='/view-records'>Click here to go back </a>";
    }

     public function delete($id){
        DB::delete('delete from student where id = ?', [$id]);
        return "Record Delete sucessfully <a href='/view-records'>Click here to go back </a>";
     }

     public function delete_all(){
        DB::statement('truncate table student');
        return "All records delete sucessfully! <a href='/view-records'>Click here to go back </a>";
     }
}
