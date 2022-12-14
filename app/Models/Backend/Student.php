<?php

namespace App\Models\Backend;
use App\Models\Backend\Batch;
use App\Models\User;
use App\Models\Backend\Program;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='students';
    protected $fillable = ['name','batch_id','program_id','email','status','Enroll_year','created_by','updated_by'];
    protected $filltable=['name','batch_id','program_id','email','status','Enroll_year','created_by','updated_by'];

    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
    function batch()
    {
     return $this->belongsto(Batch::class, 'batch_id', 'id');
     }
     function program(){
         return $this->belongsto(Program::class, 'program_id', 'id');
     }
}
