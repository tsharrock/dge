<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_discs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable(); //maps to user table-> id
            $table->integer('disc_id')->nullable(); //maps to discmaster-> id
            $table->integer('pdga_id')->nullable(); //maps to pdga-> id
            $table->integer('plastic_id')->nullable(); //maps to pdga-> id
            $table->text('description')->nullable();
            $table->tinyInteger('sleepy_scale_rating')->nullable();
            $table->decimal('price', 9, 2)->nullable();
            $table->boolean('negotiable')->nullable();
            $table->decimal('shipping_cost', 9, 2)->nullable();
            $table->boolean('local_only')->nullable();
            $table->string('img_front')->nullable();
            $table->string('img_back')->nullable();
            $table->integer('weight')->nullable();
            $table->string('color', 100)->nullable();
            $table->string('stamp', 250)->nullable();
            $table->integer('transaction_id')->nullable(); //maps to trasaction table -> id
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
        Schema::dropIfExists('user_discs');
    }
}
