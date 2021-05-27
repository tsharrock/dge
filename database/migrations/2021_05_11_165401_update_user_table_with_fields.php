<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUserTableWithFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('phone')->nullable();;
            $table->string('address')->nullable();;
            $table->string('city')->nullable();;
            $table->string('state')->nullable();;
            $table->string('zip')->nullable();;
            $table->string('venmo')->nullable();
            $table->string('paypal')->nullable();
            $table->boolean('email_consent')->nullable();;
            $table->boolean('sms_consent')->nullable();;
            $table->tinyInteger('rating_as_buyer')->nullable();;
            $table->tinyInteger('rating_as_seller')->nullable();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('city');
            $table->dropColumn('state');
            $table->dropColumn('zip');
            $table->dropColumn('venmo');
            $table->dropColumn('paypal');
            $table->dropColumn('email_consent');
            $table->dropColumn('sms_consent');
            $table->dropColumn('rating_as_buyer');
            $table->dropColumn('rating_as_seller');
        });
    }
}
