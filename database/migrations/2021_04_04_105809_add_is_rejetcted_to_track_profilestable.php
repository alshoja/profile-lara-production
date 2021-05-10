<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsRejetctedToTrackProfilestable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('track_profiles', function (Blueprint $table) {
            $table->tinyInteger('is_rejected')->default(0)->nullable();
            $table->tinyInteger('is_rejected_by')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('track_profiles', function (Blueprint $table) {
            $table->tinyInteger('is_rejected')->default(0)->nullable();
            $table->tinyInteger('rejected_by')->default(0)->nullable();
        });
    }
}
