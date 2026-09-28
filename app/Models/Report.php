<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['user_id', 'paper_id', 'reason', 'status'];
    //
    public function user(){
        return $this->belongsTo(User::class, "user_id");

    }

        public function paper(){
        return $this->belongsTo(Paper::class, "paper_id");
        
    }
}
