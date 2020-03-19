<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChestProgram;
use App\Http\Requests\StoreProgram;
use Illuminate\Http\Request;
use App\Chest;
use App\Armpit;
use App\Bicep;
use App\Tricep;
use App\Leg;
use App\Shoulder;
use App\Back;


class ProgramController extends Controller
{

    //controller,s constructor
    public function __construct() {

        $this->middleware('auth');
    }



    public function getChest(Request $request) {

        $names = $request->input('chestName.*');
        $sets = $request->input('chestSet.*');
        $maxs = $request->input('chestMax.*');


        // $validated = $request->validated();

        for($i = 0;$i < count($names);$i++) {

            $chest = new Chest();

            $chest->exercise = $names[$i];
            $chest->set = $sets[$i];
            $chest->max_weight = $maxs[$i];
            $chest->program_id = 2;

            $chest->save();
        }

        return back();
    }

    public function getArmpit(Request $request) {

        $names = $request->input('armpitName.*');
        $sets = $request->input('armpitSet.*');
        $maxs = $request->input('armpitMax.*');


        // $validated = $request->validated();

        for($i = 0;$i < count($names);$i++) {

            $chest = new Armpit();

            $chest->exercise = $names[$i];
            $chest->set = $sets[$i];
            $chest->max_weight = $maxs[$i];
            $chest->program_id = 2;

            $chest->save();
        }

        return back();
    }


    public function getBicep(Request $request) {

        $names = $request->input('bicepsName.*');
        $sets = $request->input('bicepsSet.*');
        $maxs = $request->input('bicepsMax.*');


        // $validated = $request->validated();

        for($i = 0;$i < count($names);$i++) {

            $chest = new Bicep();

            $chest->exercise = $names[$i];
            $chest->set = $sets[$i];
            $chest->max_weight = $maxs[$i];
            $chest->program_id = 2;

            $chest->save();
        }

        return back();
    }

    public function getTricep(Request $request) {

        $names = $request->input('tricepsName.*');
        $sets = $request->input('tricepsSet.*');
        $maxs = $request->input('tricepsMax.*');


        // $validated = $request->validated();

        for($i = 0;$i < count($names);$i++) {

            $chest = new Tricep();

            $chest->exercise = $names[$i];
            $chest->set = $sets[$i];
            $chest->max_weight = $maxs[$i];
            $chest->program_id = 2;

            $chest->save();
        }

        return back();
    }

    public function getBack(Request $request) {

        $names = $request->input('backName.*');
        $sets = $request->input('backSet.*');
        $maxs = $request->input('backMax.*');


        // $validated = $request->validated();

        for($i = 0;$i < count($names);$i++) {

            $chest = new Back();

            $chest->exercise = $names[$i];
            $chest->set = $sets[$i];
            $chest->max_weight = $maxs[$i];
            $chest->program_id = 2;

            $chest->save();
        }

        return back();
    }


    public function getLeg(Request $request) {

        $names = $request->input('legName.*');
        $sets = $request->input('legSet.*');
        $maxs = $request->input('legMax.*');


        // $validated = $request->validated();

        for($i = 0;$i < count($names);$i++) {

            $chest = new Leg();

            $chest->exercise = $names[$i];
            $chest->set = $sets[$i];
            $chest->max_weight = $maxs[$i];
            $chest->program_id = 2;

            $chest->save();
        }

        return back();
    }


    public function getShoulder(Request $request) {

        $names = $request->input('shoulderName.*');
        $sets = $request->input('shoulderSet.*');
        $maxs = $request->input('shoulderMax.*');


        // $validated = $request->validated();

        for($i = 0;$i < count($names);$i++) {

            $chest = new Shoulder();

            $chest->exercise = $names[$i];
            $chest->set = $sets[$i];
            $chest->max_weight = $maxs[$i];
            $chest->program_id = 2;

            $chest->save();
        }

        return back();
    }
}
