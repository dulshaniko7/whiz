<?php

use App\Model\Student;
use Illuminate\View\View;

class StudentComposer
{
    public function compose(View $view){
        $view->with('students', Student::orderBy('id')->get());
    }
}
