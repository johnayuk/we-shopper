<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            // $table->integer('product_id')->unsigned()->nullable();
            // $table->integer('category_id')->unsigned()->nullable();
            $table->timestamps();
            // $table->foreign('product_id')->references('id')
            // ->on('products')->onDelete('cascade');
            // $table->foreign('category_id')->references('id')
            // ->on('categories')->onDelete('cascade');


            // $table->bigIncrements('id');
            // $table->unsignedBigInteger('category_id');
            // $table->string('name');
            // $table->string('slug');
            // $table->string('details');
            // $table->string('price');
            // $table->string('description');
            // $table->boolean('featured')->default(true);
            // $table->timestamps();

            // $table->foreign('category_id')
            // ->references('id')
            // ->on('category')
            // ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_product');
    }
}
