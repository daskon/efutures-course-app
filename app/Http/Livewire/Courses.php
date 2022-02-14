<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Courses extends Component
{
    public $showEnrollCourseModel = false;
    public $showAddCourseModel = false;

    public $course_code;
    public $course_name;
    public $description;
    public $selected_cource;

    public function render()
    {
        return view('livewire.courses', ['courses' => $this->getCourses()]);
    }

    /**
     * get list of Courses
     *
     * @return void
     */
    public function getCourses()
    {
        $query = Course::all();
        return $query;
    }
    
    /**
     * show enroll Courses Model window
     *
     * @return void
     */
    public function enrollCoursesModel()
    {
        $this->showEnrollCourseModel = true;
    }
    
    /**
     * show add new Courses Model
     *
     * @return void
     */
    public function addCoursesModel()
    {
        $this->showAddCourseModel = true;
    }
    
    /**
     * add new Course
     *
     * @return void
     */
    public function createCourse()
    {
        $course = Course::create([
                    'code' => $this->course_code,
                    'name' => $this->course_name,
                    'description' => $this->description
                  ]);

        if($course)
        {
            $this->showAddCourseModel = false;
            $this->course_code = '';
            $this->course_name = '';
            $this->description = '';
        }
    }

     /**
     * enroll to Course
     *
     * @return void
     */
    public function enrollToCourse()
    {
        if($this->selected_cource == null) return;

        $query = CourseStudent::create([
                    'student_id' => Student::where('email', Auth::user()->email)->value('id'),
                    'course_id'  => $this->selected_cource
                ]);

        if($query)
        {
            $this->showEnrollCourseModel = false;
        }
    }
}
