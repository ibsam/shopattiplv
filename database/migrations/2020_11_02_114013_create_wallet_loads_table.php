<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletLoadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet_loads', function (Blueprint $table) {
            $table->id();
            $table->string('user')->nullable();
            $table->string('amount')->nullable();
            $table->string('method')->nullable();
            $table->string('status')->nullable();
            $table->string('timestamp')->nullable();
            $table->longText('payment_details')->nullable();
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
        Schema::dropIfExists('wallet_loads');
    }
}