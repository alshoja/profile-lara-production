<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackProfileStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('track_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->tinyInteger('profile_id');
            $table->tinyInteger('general_director_id')->nullable();
            $table->tinyInteger('director_id')->nullable();
            $table->tinyInteger('depart_head_id')->nullable();
            $table->tinyInteger('supervisor_id')->nullable();
            $table->tinyInteger('employ_id')->default(0)->nullable();
            $table->tinyInteger('approved_by')->default(0)->nullable();
            $table->tinyInteger('is_notify')->nullable();
            $table->tinyInteger('is_rejected')->default(0)->nullable();
            $table->tinyInteger('is_rejected_by')->default(0)->nullable();
            $table->tinyInteger('is_completed')->nullable();
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
        Schema::dropIfExists('track_profiles');
    }
}
