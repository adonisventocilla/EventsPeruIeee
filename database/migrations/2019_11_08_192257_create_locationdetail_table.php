<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locationdetail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('event_id')->index();
            $table->string('addressLine1',100);
            $table->string('building',100)->nullable();
            $table->string('addressLine2',100)->nullable();
            $table->string('roomNumber',100)->nullable();
            $table->string('city',100)->nullable();
            $table->string('country',100)->nullable();
            $table->string('province',100)->nullable();
            $table->char('postalCode',5)->nullable();
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
        Schema::dropIfExists('locationdetail');
    }
}
