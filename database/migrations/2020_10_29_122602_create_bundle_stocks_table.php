<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBundleStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundle_stocks', function (Blueprint $table) {
            $table->id();
            $table->string('type')->nullable();
            $table->string('product_bundle')->nullable();
            $table->string('quantity')->nullable();
            $table->string('rate')->nullable();
            $table->string('total')->nullable();
            $table->string('reason_note')->nullable();
            $table->string('datetime')->nullable();
            $table->string('sale_id')->nullable();
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('bundle_stocks');
    }
}
