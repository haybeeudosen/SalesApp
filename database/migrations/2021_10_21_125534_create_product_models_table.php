<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->unique();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('supplier_id');
            $table->string('description');
            $table->integer('quantity');
            $table->decimal('price');
            $table->timestamps();


            $table->foreign('category_id')->references('id')->on('category_models')
                ->onDelete('cascade');
            $table->foreign('brand_id')->references('id')->on('brand_models')
                ->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('supplier_models')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_models');
    }
}
