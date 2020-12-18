<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_details', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->string('first_name')->length(255);
            $table->string('last_name')->length(255);
            $table->string('email')->length(255);
            $table->string('company_name')->length(255)->nullable();
            $table->string('country')->length(255);
            $table->string('address1')->length(500);
            $table->string('address2')->length(500)->nullable();
            $table->string('city')->length(255);
            $table->string('state')->length(255);
            $table->string('zip_code')->length(255);
            $table->boolean('is_billing')->default(1);
            $table->boolean('active')->default(1);
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
        Schema::dropIfExists('customer_details');
    }
}
