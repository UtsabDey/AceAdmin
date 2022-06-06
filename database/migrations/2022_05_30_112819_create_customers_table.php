<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('register_from')->nullable();
            $table->unsignedBigInteger('customer_type_id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('gender');
            $table->text('address')->nullable();
            $table->string('country')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('area_id')->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('is_default')->default('No');
            $table->decimal('opening_balance')->default(0);
            $table->decimal('current_balance')->default(0);
            $table->integer('reffered_by')->nullable();
            $table->tinyInteger('status')->default(1);

            $table->timestamps();

            $table->foreign('customer_type_id')->references('id')->on('customer_types');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('area_id')->references('id')->on('areas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
