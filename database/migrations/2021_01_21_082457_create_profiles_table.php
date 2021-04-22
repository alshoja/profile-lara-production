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
            $table->string('name_arabic');
            $table->string('name');
            $table->string('nationality');
            $table->string('dob');
            $table->string('gender');
            $table->string('place_birth'); 
            $table->text('address');
            $table->string('referal_name');
            $table->string('product_type');
            $table->string('passport_no');
            $table->string('passport_issue');
            $table->string('date_issue');
            $table->string('residency');
            $table->string('location');
            $table->string('date_expiry');
            $table->string('uid');
            $table->string('proffession');
            $table->string('inventory_name');
            $table->string('inventory_codes');
            $table->text('note')->nullable();
            $table->string('inventory_detials');
            $table->string('scanned_document1');
            $table->string('scanned_document2');
            $table->string('scanned_document3');
            $table->string('scanned_document4')->nullable();;
            $table->string('scanned_document5')->nullable();;
            $table->string('scanned_document6')->nullable();;
            $table->string('scanned_document7')->nullable();;
             $table->tinyInteger('is_completed')->default(0)->nullable();
            $table->tinyInteger('belongs_to')->nullable();
            $table->tinyInteger('is_drafted')->nullable();
            $table->foreignId('dep_id')->constrained('departments');
            $table->foreignId('section_id')->constrained('sections');
            $table->foreignId('employ_id')->constrained('users');
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
