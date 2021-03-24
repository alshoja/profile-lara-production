<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDepartHeadIdToDepartmentSupervisorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('department_supervisors', function (Blueprint $table) {
            $table->foreignId('depart_head_id')->constrained('users')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('department_supervisors', function (Blueprint $table) {
            $table->foreignId('depart_head_id')->constrained('users');
        });
    }
}
