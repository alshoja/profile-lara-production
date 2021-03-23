<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectorGdRelationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('director_gd_relations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('director_id')->constrained('users');
            $table->foreignId('dep_id')->constrained('departments');
            $table->foreignId('general_director_id')->constrained('users');
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
        Schema::dropIfExists('director_gd_relations');
    }
}
