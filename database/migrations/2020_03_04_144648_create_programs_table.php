<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();


        });

        //create chest table
        Schema::create('chests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exercise');
            $table->integer('set');
            $table->integer('max_weight');
            $table->unsignedBigInteger('program_id');

            // $table->primary('id');
            // $table->index('program_id');
            // $table->foreign('program_id')->refrence('id')->on('programs');
        });

        //create biceps table
        Schema::create('biceps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exercise');
            $table->integer('set');
            $table->integer('max_weight');
            $table->unsignedBigInteger('program_id');

            // $table->primary('id');
            // $table->index('program_id');
            // $table->foreign('program_id')->refrence('id')->on('programs');
        });

        //create armpit table
        Schema::create('armpits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exercise');
            $table->integer('set');
            $table->integer('max_weight');
            $table->unsignedBigInteger('program_id');

            // $table->primary('id');
            // $table->index('program_id');
            // $table->foreign('program_id')->refrence('id')->on('programs');
        });

        //create triceps table
        Schema::create('triceps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exercise');
            $table->integer('set');
            $table->integer('max_weight');
            $table->unsignedBigInteger('program_id');

            // $table->primary('id');
            // $table->index('program_id');
            // $table->foreign('program_id')->refrence('id')->on('programs');
        });

        //create shoulder table
        Schema::create('shoulder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exercise');
            $table->integer('set');
            $table->integer('max_weight');
            $table->unsignedBigInteger('program_id');

            // $table->primary('id');
            // $table->index('program_id');
            // $table->foreign('program_id')->refrence('id')->on('programs');
        });

        //create back table
        Schema::create('backs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exercise');
            $table->integer('set');
            $table->integer('max_weight');
            $table->unsignedBigInteger('program_id');

            // $table->primary('id');
            // $table->index('program_id');
            // $table->foreign('program_id')->refrence('id')->on('programs');
        });

        //create leg table
        Schema::create('legs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('exercise');
            $table->integer('set');
            $table->integer('max_weight');
            $table->unsignedBigInteger('program_id');

            // $table->primary('id');
            // $table->index('program_id');
            // $table->foreign('program_id')->refrence('id')->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
