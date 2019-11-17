<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendeventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendevent', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('userType_id')->index();
            $table->unsignedBigInteger('event_id')->index();
            $table->unsignedBigInteger('paymentway_id')->index();
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
        Schema::dropIfExists('attendevent');
    }
}
