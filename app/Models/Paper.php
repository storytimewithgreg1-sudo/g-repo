<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    //

    protected $fillable = ['title', 'course_id', 'uploaded_by', 'year', 'exam_type', 'file_path', 'status'];
    
    public function reports (){
        return $this->hasMany(Report::class, "paper_id");
    }
    
    public function downloads (){
        return $this->hasMany(Dowwnload::class, "paper_id");

    }

    public function user (){
        return $this->hasOne(User::class,"uploaded_by");
    }

    public function course (){
        return $this->belongTo(Course::class, "course_id");
    }

}
