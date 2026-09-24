<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    //
    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }

    public function paper(){
        return $this->belongsTo(Paper::class, "paper_id");
    }
}
