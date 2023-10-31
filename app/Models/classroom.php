<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    use HasFactory;

    protected $table = 'class';

    public function student()
    {
        return $this->hasMany(student::class, 'class_id', 'id');
    }
    
    public function homeroom()
    {
        return $this->belongsTo(teacher::class, 'teacher_id', 'id');
    }
}
