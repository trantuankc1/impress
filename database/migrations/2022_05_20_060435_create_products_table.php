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
            $table->string('name',300)->nullable();
            $table->integer('price',)->nullable();
            $table->text('content')->nullable();
            $table->text('description')->nullable();
            $table->string('image', 300)->nullable();
            $table->enum('type_product', ['true', 'false'])->nullable();
            $table->enum('status', [0, 1])->nullable();
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
