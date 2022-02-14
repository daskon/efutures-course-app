<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','status'];
    
    /**
     * students belogns to course
     *
     * @return void
     */
    public function course()
    {
        return $this->belongsToMany(Course::class,'course_students','student_id');
    }
}
