<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tricep extends Model
{
    public function program() {

        return $this->hasOne('App\Program');
    }
}
