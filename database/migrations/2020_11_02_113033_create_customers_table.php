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
            $table->string('username')->nullable();
            $table->string('surname')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('langlat')->nullable();
            $table->string('password')->nullable();
            $table->string('fb_id')->nullable();
            $table->string('g_id')->nullable();
            $table->string('g_photo')->nullable();
            $table->string('creation_date')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('skype')->nullable();
            $table->string('facebook')->nullable();
            $table->string('wishlist')->nullable();
            $table->string('last_login')->nullable();
            $table->string('user_type')->nullable();
            $table->string('user_type_till')->nullable();
            $table->string('left_product_type');
            $table->string('downloads');
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('wallet')->nullable();
            $table->integer('product_upload')->nullable();
            $table->string('package_info')->nullable();
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
