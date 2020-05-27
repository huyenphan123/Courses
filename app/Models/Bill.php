<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $table ='bills';
    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function billDetail(){
        return $this->hasMany('App\Models\BillDetail');
    }
}
