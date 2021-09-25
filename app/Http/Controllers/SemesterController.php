<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Semester;

class SemesterController extends Controller
{
    function __construct(Semester $semester)
    {
        $this->semester = $semester;
    }


    public function index() 
    {
        return view('semester.index');
    }

    public function list() 
    {
        $semesters = $this->semester->all();
        return response()->json(['data' => $semesters]);
    }

    public function show(Request $request) 
    {
        $semester_id = $request->id;
        
        return view('semester.show', compact('semester_id'));
    }

}
