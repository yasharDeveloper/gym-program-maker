<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    // armpit
    // public function armpit() {

    //     return $this->hasOne('App\Armpit');
    // }

    //back
    // public function back() {

    //     return $this->hasOne('App\Back');
    // }

    // // biceps
    // public function bicep() {

    //     return $this->hasOne('App\Bicep','program_id');
    // }

    // //triceps
    // public function tricep() {

    //     return $this->hasOne('App\Triceps');
    // }

    // //shoulder
    // public function shoulder() {

    //     return $this->hasOne('App\Shoulder');
    // }

    // //leg
    // public function Leg() {

    //     return $this->hasOne('App\Leg');
    // }

    //chest
    public function chest() {

        return $this->hasOne('App\Chest','program_id');
    }


}
