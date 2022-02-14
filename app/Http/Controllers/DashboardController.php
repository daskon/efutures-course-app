<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{    
    /**
     * return dashboard page
     *
     * @return void
     */
    public function index()
    {
        return view('dashboard');
    }
    
    /**
     * render courses page
     *
     * @return void
     */
    public function coursesPage()
    {
        return view('courses');
    }

     /**
     * render students page
     *
     * @return void
     */
    public function studentsPage()
    {
        return view('students');
    }

     /**
     * render students course enrolled page
     *
     * @return void
     */
    public function studentsEnrolledPage()
    {
        return view('enrolled-courses');
    }
}
