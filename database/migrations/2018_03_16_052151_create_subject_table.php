<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_type');
            $table->string('full_name', 250)->null()->comment("subject Full Name");
            $table->string('email', 100)->null()->comment("subject email");
            $table->string('contact', 50)->null()->comment("subject email");
            $table->integer('age')->null()->comment("subject age");
            $table->string('fathers_name', 100)->null()->comment("subject fathers Name");
            $table->string('mothers_name', 100)->null()->comment("subject motherss Name");
            $table->tinyInteger('gender')->null()->comment("subject gender");
            $table->string('occupation',50)->null()->comment("subject occupation");
            $table->string('nationality',100)->null()->comment("subject nationality");
            $table->string('nid',50)->null()->comment("subject national Id");
            $table->date('dob')->null()->comment("subject Date of Birth");
            $table->string('image',200)->null()->comment("subject path");
            $table->tinyInteger('status')->default(1)->comment("status 1= active; 0 ");
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
        Schema::dropIfExists('subjects');
    }
}
