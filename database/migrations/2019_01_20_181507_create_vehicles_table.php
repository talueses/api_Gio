<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('color');
            $table->integer('km');
            $table->string('model');
            $table->string('numberChasis');
            $table->string('numberMotor');
            $table->string('plate');
            $table->string('soat');
            $table->string('soatName');
            $table->string('tradeMark');
            $table->string('type');
            $table->integer('year');
            $table->boolean('status');
            $table->string('driverId');
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
        Schema::dropIfExists('vehicles');
    }
}
