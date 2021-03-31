<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimelineToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // $table->foreignId('general_director_id')->nullable();
            // $table->foreignId('director_id')->nullable();
            // $table->foreignId('depart_head_id')->nullable();
            // $table->foreignId('supervisor_id')->nullable();
            $table->tinyInteger('is_completed')->nullable();
            // $table->tinyInteger('is_notify')->nullable();
            // $table->tinyInteger('is_drafted')->nullable();\
            $table->tinyInteger('is_drafted')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('profiles', function (Blueprint $table) {
            // $table->foreignId('general_director_id')->nullable();
            // $table->foreignId('director_id')->nullable();
            // $table->foreignId('depart_head_id')->nullable();
            // $table->foreignId('supervisor_id')->nullable();
            $table->tinyInteger('is_completed')->nullable();
            // $table->tinyInteger('is_notify')->nullable();
            // $table->tinyInteger('is_drafted')->nullable();
            $table->tinyInteger('is_drafted')->nullable();
        });
    }
}
