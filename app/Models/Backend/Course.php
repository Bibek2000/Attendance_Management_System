<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Backend\Program;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='courses';
    protected $fillable = ['program_id','No_of_semester','course_code','name','status','created_by','updated_by'];
    protected $filltable = ['program_id','No_of_semester','course_code','name','status','created_by','updated_by'];


    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
    function program()
    {
        return $this->belongsTo(Program::class,'program_id','id');
    }
}
