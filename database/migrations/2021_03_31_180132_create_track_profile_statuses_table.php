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
            $table->string('from');
            $table->foreignId('profile_id')->constrained('profiles')->onDelete('cascade');
            $table->tinyInteger('at_end_user')->default(0)->nullable();
            $table->string('status');
            $table->tinyInteger('owned_by');
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
