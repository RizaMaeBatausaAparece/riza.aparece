<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = [
        'coursename',
        'description',
        'start_date',
        'end_date',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollments::class, 'courses_id');
    }
}
