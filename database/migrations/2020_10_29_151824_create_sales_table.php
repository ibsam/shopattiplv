<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('sale_code')->nullable();
            $table->string('buyer')->nullable();
            $table->string('guest_id')->nullable();
            $table->longText('product_details')->nullable();
            $table->longText('shipping_address')->nullable();
            $table->string('vat')->nullable();
            $table->string('vat_percent')->nullable();
            $table->string('shipping')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_status')->nullable();
            $table->longText('payment_details')->nullable();
            $table->string('payment_timestamp')->nullable();
            $table->string('grand_total')->nullable();
            $table->string('sale_datetime')->nullable();
            $table->string('delivary_datetime')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('viewed')->nullable();
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
        Schema::dropIfExists('sales');
    }
}
