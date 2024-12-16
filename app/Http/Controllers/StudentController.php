<?php

namespace App\Http\Controllers;

use App\DataTables\StudentDataTable;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct(){
        
    }

    public function index(StudentDataTable $dataTable){
        
        return $dataTable->render('students.list');
    }

    public function add(Request $request){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email_id' => 'required|email|unique:students,email_id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|string|unique:students,username|max:255',
            'date_of_birth' => 'required|date',
            'standard' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'entry_year' => 'required|integer|digits:4',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }

        Student::create([
            'image' => $imagePath,
            'email_id' => $request->email_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'date_of_birth' => $request->date_of_birth,
            'standard' => $request->standard,
            'gender' => $request->gender,
            'admission' => $request->entry_year,
        ]);

        return redirect()->route('students');
    }

    public function delete(Request $request){
        $id = decrypt($request->id);

        Student::where('id',$id)->delete();
        return redirect()->route('students');
    }

    public function edit(Request $request){
        $id = decrypt($request->id);

        $student = Student::where('id',$id)->first();
        return view('students.edit',compact('student'));
    }

    public function update(Request $request){
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'email_id' => 'required',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'username' => 'required|max:255',
            'date_of_birth' => 'required|date',
            'standard' => 'required|string|max:255',
            'gender' => 'required|in:male,female,other',
            'entry_year' => 'required|integer|digits:4',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        }
        $id = decrypt($request->id);
        Student::where('id',$id)->update([
            'image' => $imagePath,
            'email_id' => $request->email_id,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'username' => $request->username,
            'date_of_birth' => $request->date_of_birth,
            'standard' => $request->standard,
            'gender' => $request->gender,
            'admission' => $request->entry_year,
        ]);

        return redirect()->route('students');
    }

}
