<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class Students extends Component
{
    public function render()
    {
        return view('livewire.students', ['students' => $this->getStudents()]);
    }

    /**
     * get list of students
     *
     * @return void
     */
    public function getStudents()
    {
        $query = Student::all();
        return $query;
    }
}
