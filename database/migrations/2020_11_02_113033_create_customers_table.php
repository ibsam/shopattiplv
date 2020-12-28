<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->length(255);
            $table->string('last_name')->length(255);
            $table->string('email')->length(500);
            $table->string('password');
            $table->string('phone_no')->length(255);
            $table->boolean('is_guest')->default(0);
            $table->boolean('active')->default(1);
            //$table->string('address1');
            //$table->string('address')
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
        Schema::dropIfExists('customers');
    }
}
