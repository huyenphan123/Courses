<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table='comments';
    public function course(){
        return $this->belongsTo('App\Models\Course');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
