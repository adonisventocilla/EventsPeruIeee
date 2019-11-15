<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->datetime('startTime');
            $table->datetime('endTime');
            $table->string('timeZone', 100);
            $table->text('description');
            $table->text('header')->nullable();
            $table->text('footer')->nullable();
            $table->text('agenda')->nullable();
            $table->text('keywords')->nullable();
            $table->boolean('inviteStudents');
            $table->boolean('remotelyAccessible');
            $table->boolean('status');
            $table->unsignedBigInteger('eventSubCategory_id')->index()->nullable();
            $table->unsignedBigInteger('eventCategory_id')->index()->nullable();
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
        Schema::dropIfExists('event');
    }
}
