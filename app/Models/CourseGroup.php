<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseGroup extends Model
{
    use HasFactory;

    public function lecturer()
    {
        return $this->hasOne(Lecturer::class, 'id', 'lecturer_id');
    }

    public function students()
    {
        return $this->belongsTo(Student::class);
    }
}
