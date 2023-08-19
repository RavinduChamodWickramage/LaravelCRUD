<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class RegistationController extends Controller
{

    public function index(){


        $students = Student::select('id' ,'name','age','dob','status')->orderBy('id', 'desc')->get();
        //dd($students);

        return view('frontend.view_students', compact(['students']));
    }

    public function addStudentUI(){
        return view('frontend.registation');
    }

    public function createStudent(Request $request){
        //dd($request);

        $validation = $request->validate([
            'name' => 'required|string|max:50',
            'age' => 'required|integer',
            'dob' => 'required',
            
        ]);

        $student = new Student();

        $student->name = $request->name;
        $student->age = $request->age;
        $student->dob = $request->dob;
        $student->status = $request->status;

        $student->save();

        return redirect('/');

    }

    public function editStudentUI($id){

        $editStudent = Student::all()->where('id', $id)->first();
        return view('frontend.edit_student', compact(['editStudent']));
    }

    public function updateStudent(Request $update){

        $updateStudent = Student::where('id',$update->id)->first();
        //dd($updateStudent);

        $updateStudent->name = $update->name;
        $updateStudent->age = $update->age;
        $updateStudent->dob = $update->dob;
        $updateStudent->status = $update->status;

        $updateStudent->save();

        return redirect('/');

    }

    public function deleteStudent($id){

        $deleteStudent = Student::where('id',$id)->delete();

        return back();
    }
}
