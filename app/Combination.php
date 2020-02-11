<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Combination extends Model
{
    protected  $guarded = [];

    public function adspend()
    {
        return $this->hasOne('App\Adspend');
    }

    public function call()
    {
        return $this->hasOne('App\Call');
    }

    public function network()
    {
        return $this->belongsTo('App\Network');
    }

    public function staging()
    {
        return $this->hasOne('App\Staging');
    }
}
