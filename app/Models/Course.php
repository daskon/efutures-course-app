<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['code','name','description'];
    
    /**
     * course has many students
     *
     * @return void
     */
    public function student()
    {
        return $this->belongsToMany(Student::class,'course_students');
    }
}
