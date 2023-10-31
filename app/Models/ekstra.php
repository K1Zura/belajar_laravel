<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ekstra extends Model
{
    protected $table = 'ekstra';

    public function students()
    {
        return $this->belongsToMany(student::class, 'student_extra', 'ekstrakulikular_id', 'student_id');
    }
}
