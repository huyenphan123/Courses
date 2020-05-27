<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table='subjects';
    public function course(){
        return $this->hasMany('App\Models\Course');
    }
}
