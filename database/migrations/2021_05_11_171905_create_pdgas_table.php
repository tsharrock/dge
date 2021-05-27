<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePdgasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdgas', function (Blueprint $table) {
            $table->id();
            $table->date('year_approved');
            $table->integer('diameter');
            $table->integer('height');
            $table->integer('rim_depth');
            $table->integer('rim_width');
            $table->integer('max_weight');
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
        Schema::dropIfExists('pdgas');
    }
}
