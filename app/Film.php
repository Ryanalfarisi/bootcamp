<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //

    public function actress() {
        return $this->hasMany('App\Actress');
    }
}
