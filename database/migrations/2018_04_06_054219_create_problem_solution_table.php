<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemSolutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problem_solutions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("problem_type_id")->comment("Reference form problem type table");
            $table->integer("solution_id")->comment("Reference form Solutions table");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problem_solutions');
    }
}
