<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_type')->nullable();
            $table->string('quantity_kg')->nullable();
            $table->string('quantity_g')->nullable();
            $table->string('quantity_ml')->nullable();
            $table->string('quantity_digit')->nullable();
            $table->string('manufacture_type')->nullable();
            $table->string('shipped_type')->nullable();
            $table->foreignId('profile_id')->constrained('profiles')->nullable();
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
        Schema::dropIfExists('products');
    }
}
