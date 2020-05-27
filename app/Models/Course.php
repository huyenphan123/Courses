<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table='courses';
    public function user(){
        return $this->belongsTo('App\Models\User','teacher_id');
    }

    public function comment(){
        return $this->hasMany('App\Models\Comment');
    }

    public function billDetail(){
        return $this->hasMany('App\Models\BillDetail');
    }

    public function subject(){
        return $this->belongsTo('App\Models\Subject');
    }

    public function video(){
        return $this->hasMany('App\Models\Video');
    }
}
