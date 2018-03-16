<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectAddressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_address', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subject_id');
            $table->integer('address_type')->comment("1=present Address; 2=permanent");
            $table->integer('division_id')->comment("division Address");
            $table->integer('district_id')->comment("district Address");
            $table->integer('thana_id')->comment("thana Address");
            $table->integer('upazila_id')->comment("upazila");
            $table->string('postal_code',200)->comment("postal code");
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
        Schema::dropIfExists('subject_address');
    }
}
