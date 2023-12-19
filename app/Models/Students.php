<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'age',
        'email',
        'birthdate',
    ];

    public function enrollments()
    {
        return $this->hasMany(Enrollments::class, 'students_id');
    }

    public function grades()
    {
        return $this->hasMany(Grades::class, 'students_id');
    }
}
