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
            $table->text('details');
            $table->string('image');
            $table->string('meta_tags');
            $table->foreignId('category_id');
            $table->string('SKU')->nullable();
            $table->string('UPC')->nullable();
            $table->string('EAN')->nullable();
            $table->string('JAN')->nullable();
            $table->string('MPN')->nullable();
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->float('tax')->nullable();
            $table->integer('minmum_qnty')->nullable();
            $table->string('stock_status')->nullable();
            $table->boolean('require_shipping')->default(0);
            $table->dateTime('date_available')->nullable();
            $table->string('dimensions')->nullable();
            $table->float('length_class')->nullable();
            $table->float('weight');
            $table->float('weight_class');
            $table->string('sort_order')->nullable();
            $table->integer('status');
            $table->foreignId('vender_id');
            $table->foreignId('store_id');
            $table->string('model');
            $table->rememberToken();
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
