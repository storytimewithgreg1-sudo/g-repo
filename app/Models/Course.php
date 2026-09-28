<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['code', 'title', 'level', 'semester'];
    //
    public function papers(){
        return $this->hasMany(Paper::class, "uploaded_by");
    }

  

}
