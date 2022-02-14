<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EnrolledCourses extends Component
{
    public function render()
    {
        return view('livewire.enrolled-courses', ['enrolled' => $this->getStudentCourses()]);
    }

    /**
     * get student courses
     *
     * @return void
     */
    public function getStudentCourses()
    {
        $id = Student::where('email', Auth::user()->email)->value('id');
        $query = Student::find($id)->course; 
        return $query;
    }
}
