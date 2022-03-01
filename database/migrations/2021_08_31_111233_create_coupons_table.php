<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('product_id');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->integer('amount');
            $table->integer('type_pereot');
            $table->integer('type_status_number');
            $table->foreignId('user_id');
            $table->integer('quantity');
            $table->string('code');
            $table->integer('valid_for_newcustomer');
            $table->integer('valid_for_old');
            $table->integer('valid_for_all');
            $table->integer('minimum_amount');
            $table->integer('minimum_quantity');
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
        Schema::dropIfExists('coupons');
    }
}
