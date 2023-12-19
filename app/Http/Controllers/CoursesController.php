<?php

namespace App\Http\Controllers;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){

        $course = Courses::orderBy('id')->get();

        return view('Courses.index',['courses' => $course]);
    }

    public function create(){
        return view('Courses.create');
    }

    public function store(Request $request){
        $request->validate([
            'coursename'      => 'required',
            'description'     => 'required',
            'start_date'      => 'required',
            'end_date'        => 'required',
        ]);

        Courses::create([
            'coursename'      => $request->coursename,
            'description'     => $request->description,
            'start_date'      => $request->start_date,
            'end_date'      => $request->end_date,
        ]);

        return redirect('/courses')->with('message','A new course has been added');
    }
}
