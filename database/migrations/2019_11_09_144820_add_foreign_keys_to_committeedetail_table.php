<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToCommitteedetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('committeedetail', function (Blueprint $table) {
            $table->foreign('event_id')->references('id')->on('event');
            $table->foreign('committeeType_id')->references('id')
                ->on('committeetype');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('committeedetail', function (Blueprint $table) {
            //
        });
    }
}
