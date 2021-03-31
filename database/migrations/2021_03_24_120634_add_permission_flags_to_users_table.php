<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPermissionFlagsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('create')->default(0)->nullable();
            $table->tinyInteger('update')->default(0)->nullable();
            $table->tinyInteger('delete')->default(0)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->tinyInteger('create')->default(0)->nullable();
            $table->tinyInteger('update')->default(0)->nullable();
            $table->tinyInteger('delete')->default(0)->nullable();
        });
    }
}
