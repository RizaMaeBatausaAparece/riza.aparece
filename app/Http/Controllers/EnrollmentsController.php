<?php

namespace App\Http\Controllers;
use App\Models\Enrollments;
use Illuminate\Http\Request;

class EnrollmentsController extends Controller
{
    public function enrollees(){

        $enrollment = Enrollments::orderBy('id')->get();

        return view('Enrollments.index',['enrollments' => $enrollment]);
    }

    public function edit(Enrollments $enrollment)
    {
        return view('Enrollments.edit', compact('enrollment'));
    }

    public function update(Enrollments $enrollment, Request $request)
    {
        $request->validate([
            'firstname'       => 'required',
            'coursename'      => 'required',
            'enrollment_date' => 'required'
        ]);

        $enrollment->update($request->all());
        return redirect('/enrollments')->with('message', "$enrollment->firstname has been updated" );
    }

}
