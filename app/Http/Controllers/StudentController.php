<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // insert data
    public function insertData(){
        $std=new Student();
        $std->name="urooj";
        $std->email="urooj@gmail.com";
        $std->age=19;
        $std->save();
        return "record inserted";
    }

    //get all
    public function getall(){
        $std= Student::all();
        return $std;
    }

    //get single record
    public function getsinglerecord($id){
        $std=Student::find($id);
        return $std;
    }

    //update
    public function update($id){
        $std= Student::find($id);
        $std->name="hira";
        $std->email="hira@gmail.com";
        $std->save();
        return "Record Updated";
    }

    //delete
    public function deleterecord($id){
        $std= Student::find($id);
        $std->delete();
        return "Record Deleted";
    }
}
