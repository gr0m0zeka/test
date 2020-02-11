<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staging extends Model
{
    protected  $guarded = [];

    public function network()
    {
        return $this->belongsTo('App\Combination');
    }
}
