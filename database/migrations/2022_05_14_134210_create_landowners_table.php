<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landowners', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->string('city');
            $table->string('kebele');
            $table->string('occupation');
            $table->string('Rdate');
            $table->string('serviceType');
            $table->string('southbondery');
            $table->string('eastbondery');
            $table->string('northbondery');
            $table->string('westbondery');
            $table->string('area');
            $table->string('parcelcode');
            $table->string('landlavel');
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
        Schema::dropIfExists('landowners');
    }
};