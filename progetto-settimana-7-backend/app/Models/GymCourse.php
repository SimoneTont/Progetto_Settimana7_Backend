<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GymCourse extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'course_name',
        'description',
    ];

    public function timings()
    {
        return $this->hasMany(Timing::class, 'course_id');
    }
}
