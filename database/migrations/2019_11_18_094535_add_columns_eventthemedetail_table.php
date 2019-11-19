<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsEventthemedetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eventthemedetail', function (Blueprint $table) {
            $table->string('theme')->after('id');
            $table->string('prefix')->after('description');
            $table->string('firstname')->after('prefix');
            $table->string('middlename')->after('firstname');
            $table->string('lastname')->after('middlename');
            $table->string('nickname')->after('lastname');
            $table->text('url')->after('nickname');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eventthemedetail', function (Blueprint $table) {
            //
        });
    }
}
