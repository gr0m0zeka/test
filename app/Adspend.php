<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adspend extends Model
{
    protected  $guarded = [];

    public function combination()
    {
        return $this->belongsTo('App\Combination');
    }
}
