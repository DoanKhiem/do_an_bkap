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
            $table->foreignId('category_id');
            $table->foreign('category_id')->references('id')->on('categories');
            
            $table->string('name')->unique();
            $table->text('description')->nullable();
            $table->text('img');
            $table->tinyInteger('status')->default(1);
            $table->string('rear_camera')->nullable();
            $table->string('front_camera')->nullable();
            $table->string('battery')->nullable();
            $table->string('sim')->nullable();
            $table->string('screen_size')->nullable();
            $table->string('chip')->nullable();
            $table->string('weight')->nullable();
            $table->string('os')->nullable();
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
