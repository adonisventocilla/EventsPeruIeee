<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToSpeakerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speaker', function (Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('event');
            $table->foreign('person_id')->references('id')->on('person');
            $table->foreign('institute_id')->references('id')->on('institute');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('speaker', function (Blueprint $table) {
            //
        });
    }
}
