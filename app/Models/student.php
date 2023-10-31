<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'name',
        'gender',
        'nis',
        'class_id',
        'image',
    ];

    protected $table = 'student';

    public function class()
    {
        return $this->belongsTo(classroom::class);
    }

    public function ekstras()
    {
        return $this->belongsToMany(ekstra::class, 'student_extra', 'student_id', 'ekstrakulikular_id');
    }
}