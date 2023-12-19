<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grades extends Model
{
    use HasFactory;

    protected $fillable = [
        'students_id',
        'grade',
        'grade_date',
    ];

    public function enrollments()
    {
        return $this->belongsTo(Students::class, 'students_id');
    }

    public function students()
    {
        return $this->belongsTo(Students::class, 'students_id');
    }
}
