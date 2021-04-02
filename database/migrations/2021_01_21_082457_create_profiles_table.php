<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nationality');
            $table->string('dob');
            $table->string('gender');
            $table->string('citizen_status');
            $table->string('citizen_location');
            $table->string('citizen_id');
            $table->string('citizen_uid');
            $table->string('passport_no');
            $table->string('passport_type');
            $table->string('entered_by');
            $table->string('bought_by');
            $table->string('entity');
            $table->string('entry_date');
            $table->string('entity_location');
            $table->string('shipping_no');
            $table->string('coming_from');
            $table->string('going_to');
            $table->string('final_destination');
            $table->string('profile_image');
            $table->string('product_image');
            $table->string('doc_image');
            $table->string('record_status');
            $table->string('record_dep_transfer');
            $table->text('note');
            $table->tinyInteger('is_completed')->default(0)->nullable();
            $table->tinyInteger('belongs_to')->nullable();
            $table->tinyInteger('is_drafted')->nullable();
            $table->foreignId('dep_id')->constrained('departments');
            $table->foreignId('section_id')->constrained('sections');
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
        Schema::dropIfExists('profiles');
    }
}
