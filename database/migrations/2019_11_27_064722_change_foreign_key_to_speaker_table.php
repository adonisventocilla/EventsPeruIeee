<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeForeignKeyToSpeakerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('speaker', function (Blueprint $table) {
            $table->dropForeign('speaker_person_id_foreign');
            $table->renameColumn('person_id', 'user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->unsignedBigInteger('speakerDetail_id')->index();
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
