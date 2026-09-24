<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function papers(){
        return $this->hasMany(Paper::class, "uploaded_by");
    }
    
}
