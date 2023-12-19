<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){

        $student = Students::orderBy('id')->get();

        return view('Students.index',['students' => $student]);
    }

    public function create(){
        return view('Students.create');
    }

    public function store(Request $request){
        $request->validate([
            'firstname'      => 'required',
            'lastname'       => 'required',
            'age'            => 'required',
            'email'          => 'required',
            'birthdate'      => 'required|date',
        ]);

        Students::create([
            'firstname'      => $request->firstname,
            'lastname'       => $request->lastname,
            'age'            => $request->age,
            'email'          => $request->email,
            'birthdate'      => $request->birthdate,
        ]);

        return redirect('/students')->with('message','A new student has been added');
    }

    public function edit(Students $student)
    {
        return view('Students.edit', compact('student'));
    }

    public function update(Students $student, Request $request)
    {
        $request->validate([
            'firstname'     => 'required',
            'lastname'      => 'required',
            'age'           => 'required',
            'email'         => 'required',
            'birthdate'     => 'required',
        ]);

        $student->update($request->all());
        return redirect('/students')->with('message', "$student->firstname has been updated" );
    }

    public function delete(Students $student)
    {
        $student->delete();

        return redirect('/students')->with('message', "$student->firstname has been deleted" );

    }

}
