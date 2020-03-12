<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leg extends Model
{
    public function program() {

        return $this->hasOne('App\Program');
    }
}
