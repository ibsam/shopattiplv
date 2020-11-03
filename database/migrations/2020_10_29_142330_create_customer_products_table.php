<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_products', function (Blueprint $table) {
            $table->id();
            $table->integer('rating_num');
            $table->integer('rating_total');
            $table->string('rating_user')->nullable;
            $table->string('title')->nullable;
            $table->integer('added_by')->nullable;
            $table->integer('category')->nullable;
            $table->string('description')->nullable;
            $table->string('prod_condition')->nullable;
            $table->string('location')->nullable;
            $table->integer('sub_category')->nullable;
            $table->string('num_of_imgs')->nullable;
            $table->float('sale_price');
            $table->string('add_timestamp')->nullable;
            $table->string('tag')->nullable;
            $table->string('status')->nullable;
            $table->string('admin_status')->nullable;
            $table->string('front_image')->nullable;
            $table->string('brand')->nullable;
            $table->string('unit')->nullable;
            $table->string('additional_fields')->nullable;
            $table->integer('number_of_view');
            $table->string('discount');
            $table->string('discount_type')->nullable;
            $table->string('tax');
            $table->string('tax_type')->nullable;
            $table->string('color')->nullable;
            $table->string('options')->nullable;
            $table->string('main_image');
            $table->string('update_time')->nullable;
            $table->integer('last_viewed')->nullable;
            $table->string('is_sold')->nullable;

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
        Schema::dropIfExists('customer_products');
    }
}
