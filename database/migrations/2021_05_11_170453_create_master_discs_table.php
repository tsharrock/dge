<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterDiscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_discs', function (Blueprint $table) {
            $table->id();
            $table->integer('pdga_id');
            $table->integer('brand_id');
            $table->string('mold');
            $table->integer('type_id');
            $table->tinyInteger('speed');
            $table->tinyInteger('glide');
            $table->tinyInteger('turn');
            $table->tinyInteger('fade');
            $table->integer('stability_id');
            $table->integer('skill_level_id');
            $table->string('flight_chart_img');
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
        Schema::dropIfExists('master_discs');
    }
}
