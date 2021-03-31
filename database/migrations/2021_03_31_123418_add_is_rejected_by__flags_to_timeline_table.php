<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsRejectedByFlagsToTimelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('time_lines', function (Blueprint $table) {
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
        Schema::table('time_lines', function (Blueprint $table) {
            $table->tinyInteger('is_rejected_by')->default(0)->nullable();
        });
    }
}
