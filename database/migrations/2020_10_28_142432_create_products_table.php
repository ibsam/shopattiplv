<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_type_id');
            // $table->integer('rating_num');
            // $table->integer('rating_total');
            // $table->json('rating_user')->nullable();
            $table->string('name')->nullable();
            $table->string('url_name')->nullable();
            $table->string('added_by')->nullable();
            $table->integer('category_id')->nullable();
            $table->longText('description')->nullable();
            // $table->integer('sub_category_id')->nullable();
            // $table->integer('child_sub_category_id');
            $table->string('num_of_imgs')->nullable();
            $table->float('sale_price');
            $table->float('actual_price');
            $table->double('purchase_price');
            $table->string('shipping_cost')->nullable();
            $table->string('add_timestamp')->nullable();
            $table->string('featured')->nullable();
            $table->longText('tag')->nullable();
            $table->string('status')->nullable();
            $table->string('front_image')->nullable();
            $table->string('brand')->nullable();
            $table->integer('current_stock')->nullable();
            $table->string('unit')->nullable();
            $table->string('additional_fields')->nullable();
            $table->integer('number_of_view')->nullable();
            $table->json('background')->nullable();
            $table->string('discount')->nullable();
            $table->string('discount_type')->nullable();
            $table->string('tax')->nullable();
            $table->string('tax_type')->nullable();
            $table->json('color')->nullable();
            $table->json('options')->nullable();
            $table->string('main_image');
            $table->string('download')->nullable();
            $table->string('download_name')->nullable();
            $table->string('deal')->nullable();
            $table->integer('num_of_downloads')->nullable();
            $table->string('update_time')->nullable();
            $table->json('requirements')->nullable();
            $table->string('logo')->nullable();
            $table->string('video')->nullable();
            $table->integer('last_viewed')->nullable();
            $table->json('products')->nullable();
            $table->string('is_bundle')->nullable();
            $table->boolean('is_static')->default(0);
            $table->string('vendor_featured')->nullable();
           // $table->integer('add_review');

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
        Schema::dropIfExists('products');
    }
}
