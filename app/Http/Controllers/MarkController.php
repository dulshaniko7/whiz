<?php

namespace App\Http\Controllers;

use App\Model\Mark;
use App\Model\Student;
use App\Model\Subject;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function index()
    {
        $students = Student::all();
        $subjects = Subject::all();
        return view('marks.index', compact('students', 'subjects'));
    }

    public function store(Request $request)
    {

        Mark::create($request->all());
        return redirect()->route('marks');

    }
    public function destroy($id)
    {
        $mark = Mark::findOrFail($id);
        $mark->delete();
        return back();
    }
}
