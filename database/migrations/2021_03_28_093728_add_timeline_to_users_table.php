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
            $table->foreignId('general_director_id')->constrained('users')->nullable();
            $table->foreignId('director_id')->constrained('users')->nullable();
            $table->foreignId('depart_head_id')->constrained('users')->nullable();
            $table->foreignId('supervisor_id')->constrained('users')->nullable();
            $table->tinyInteger('is_completed')->default(0)->nullable();
            $table->tinyInteger('is_notify')->default(0)->nullable();
            $table->tinyInteger('is_drafted')->default(0)->nullable();
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
            $table->foreignId('general_director_id')->constrained('users')->nullable();
            $table->foreignId('director_id')->constrained('users')->nullable();
            $table->foreignId('depart_head_id')->constrained('users')->nullable();
            $table->foreignId('supervisor_id')->constrained('users')->nullable();
            $table->tinyInteger('is_completed')->default(0)->nullable();
            $table->tinyInteger('is_notify')->default(0)->nullable();
            $table->tinyInteger('is_drafted')->default(0)->nullable();
        });
    }
}
