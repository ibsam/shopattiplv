<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_payments', function (Blueprint $table) {
            $table->id();
            $table->integer('package_id')->nullable;
            $table->integer('user_id')->nullable;
           
            $table->string('payment_type')->nullable;
            $table->string('payment_status')->nullable;
            $table->string('payment_details')->nullable;
            $table->integer('amount')->nullable;
            $table->integer('purchase_datetime')->nullable;
            $table->string('payment_code')->nullable;
            $table->integer('payment_timestamp')->nullable;
            $table->string('expire')->nullable;
            $table->integer('expire_timestamp')->nullable;
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
        Schema::dropIfExists('package_payments');
    }
}
