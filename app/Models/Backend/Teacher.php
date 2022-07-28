<?php

namespace App\Models\Backend;
use App\Models\Backend\Course;
use App\Models\Backend\Program;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='teachers';
    protected $fillable = ['name','program_id','course_id','status','created_by','updated_by'];
    protected $filltable=['name','program_id','course_id','status','created_by','updated_by'];

    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
    function program(){
        return $this->belongsto(Program::class, 'program_id', 'id');
    }
    function course(){
        return $this->belongsto(Course::class, 'course_id', 'id');
    }
}
