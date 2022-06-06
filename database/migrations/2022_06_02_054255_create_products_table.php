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
            $table->string('name');
            $table->unsignedBigInteger('product_type_id');
            $table->unsignedBigInteger('category_id');
            $table->string('brand')->nullable();
            $table->bigInteger('country_id');
            $table->integer('code')->nullable();
            $table->integer('purchase_price')->nullable();
            $table->integer('wholesale_price')->nullable();
            $table->integer('sale_price')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->string('sub_text');
            $table->bigInteger('unit_measure_id');
            $table->text('image')->nullable();
            $table->string('vat')->nullable();
            $table->string('vat_type')->nullable();

            $table->timestamps();

            $table->foreign('product_type_id')->references('id')->on('product_types');
            $table->foreign('category_id')->references('id')->on('category_types');
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
