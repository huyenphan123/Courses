<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BillDetail extends Model
{
    protected $table='billdetails';
    public function bill(){
        return $this->belongsTo('App\Models\Bill');
    }

    public function course(){
        return $this->belongsTo('App\Models\Course');
    }
}

