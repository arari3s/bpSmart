<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentClassroom extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'classrooms_id', 'students_id'
    ];

    // relationships one to many student to student_classroom
    public function student()
    {
        return $this->belongsTo(Student::class, 'students_id', 'id');
    }

    // relationships one to many classroom to student_classroom
    public function classroom()
    {
        return $this->belongsTo(Classroom::class, 'classrooms_id', 'id');
    }
}
