<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToAttendeventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('attendevent', function (Blueprint $table) {
            $table->foreign('userType_id')
                ->references('id')->on('usertype');
            $table->foreign('event_id')
                ->references('id')->on('event');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('attendevent', function (Blueprint $table) {
            //
        });
    }
}
