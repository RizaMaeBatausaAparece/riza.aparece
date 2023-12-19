<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollments extends Model
{
    use HasFactory;

    protected $fillable = [
        'students_id',
        'courses_id',
        'enrollment_date',
    ];

    public function students()
    {
        return $this->belongsTo(Students::class, 'students_id');
    }

    public function courses()
    {
        return $this->belongsTo(Courses::class, 'courses_id');
    }

    public function grades()
    {
        return $this->hasOne(Grades::class, 'enrollments_id');
    }
}
