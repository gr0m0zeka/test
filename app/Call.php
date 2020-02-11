<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    public function combination()
    {
        return $this->belongsTo('App\Combination');
    }
}
