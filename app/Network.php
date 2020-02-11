<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Network extends Model
{

    protected  $guarded = [];

    public function combination()
    {
        return $this->hasOne('App\Combination');
    }
}
