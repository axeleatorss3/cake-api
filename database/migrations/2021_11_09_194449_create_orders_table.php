<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('payment_type');
            $table->double('total_amount');
            
            $table->integer('user_id');
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');


            $table->integer('client_id');
            $table->integer('client_id')->references('id')->on('clients')->onDelete('cascade');


            $table->integer('dessert_id');
            $table->integer('dessert_id')->references('id')->on('desserts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
