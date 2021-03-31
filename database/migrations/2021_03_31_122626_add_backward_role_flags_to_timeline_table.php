<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBackwardRoleFlagsToTimelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('time_lines', function (Blueprint $table) {
            $table->string('role');
            $table->tinyInteger('approved_by')->default(0)->nullable();
            $table->tinyInteger('is_rejected')->default(0)->nullable();
            $table->foreignId('general_director_id')->nullable();
            $table->foreignId('director_id')->nullable();
            $table->foreignId('depart_head_id')->nullable();
            $table->foreignId('supervisor_id')->nullable();
            $table->tinyInteger('is_notify')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('time_lines', function (Blueprint $table) {
            $table->string('role');
            $table->tinyInteger('approved_by')->default(0)->nullable();
            $table->tinyInteger('is_rejected')->default(0)->nullable();
            $table->foreignId('general_director_id')->nullable();
            $table->foreignId('director_id')->nullable();
            $table->foreignId('depart_head_id')->nullable();
            $table->foreignId('supervisor_id')->nullable();
            $table->tinyInteger('is_notify')->nullable();
        });
    }
}
