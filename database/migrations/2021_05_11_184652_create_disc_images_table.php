<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disc_images', function (Blueprint $table) {
            $table->id();
            $table->integer('discmaster_id');
            $table->tinyText('color');
            $table->tinyText('stamp');
            $table->string('img');
            $table->string('description')->nullable();
            $table->boolean('tournament')->nullable();
            $table->boolean('special_edition')->nullable();
            $table->string('pro_player', 250)->nullable();
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
        Schema::dropIfExists('disc_images');
    }
}
