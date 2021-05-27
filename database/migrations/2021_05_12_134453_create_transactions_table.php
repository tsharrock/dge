<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('buyer_id');
            $table->integer('seller_id');
            $table->decimal('price', 9, 2);
            $table->string('payment_type');
            $table->string('tracking');
            $table->string('tracking_link');
            $table->integer('buyer_rating'); //maps to buyer_rating -> id
            $table->integer('seller_rating'); //maps to seller_rating -> id
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
        Schema::dropIfExists('transactions');
    }
}
