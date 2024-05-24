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
            $table->bigIncrements('id');
            $table->string('title', 255);
            $table->string('code', 255)->uniquie();
            $table->boolean('status')->default(1);
            $table->string('h1', 255)->nullable();
            $table->text('description')->nullable();
            $table->string('seotitle', 255)->nullable();
            $table->string('seodescription', 255)->nullable();
            $table->string('articule')->nullable();
            $table->double('price')->nullable();
            $table->json('images')->nullable();
            $table->json('attributes')->nullable();
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
