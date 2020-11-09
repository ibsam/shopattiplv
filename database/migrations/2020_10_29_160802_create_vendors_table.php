<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            $table->integer('vendor_type_id')->nullable();
            $table->string('vendor_type')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('company')->nullable();
            $table->string('display_name')->nullable();
            $table->string('address1')->nullable();
            $table->string('address2')->nullable();
            $table->string('status')->nullable();
            $table->string('membership')->nullable();
            $table->integer('create_timestamp')->nullable();
            $table->integer('approve_timestamp')->nullable();
            $table->integer('member_timestamp')->nullable();
            $table->integer('member_expire_timestamp')->nullable();
            $table->longText('details')->nullable();
            $table->integer('last_login')->nullable();
            $table->string('facebook')->nullable();
            $table->string('skype')->nullable();
            $table->string('google_plus')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('stripe_details')->nullable();
            $table->string('paypal_email')->nullable();
            $table->string('preferred_payment')->nullable();
            $table->string('cash_set')->nullable();
            $table->string('stripe_set')->nullable();
            $table->string('paypal_set')->nullable();
            $table->string('phone')->nullable();
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('lat_lang');
            $table->string('country')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('state')->nullable();
            $table->string('c2_set')->nullable();
            $table->string('c2_user')->nullable();
            $table->string('c2_secret')->nullable();
            $table->string('vp_set')->nullable();
            $table->string('vp_merchant_id')->nullable();
            $table->string('pum_set')->nullable();
            $table->string('pum_merchant_key')->nullable();
            $table->string('pum_merchant_salt')->nullable();
            $table->string('Name_Of_Courier_Company');
            $table->string('COD_Account_Number');
            $table->string('Vendors_Business_Facebook_PageLink');
            $table->string('Vendors_Business_Website_Link');
            $table->string('Bank_Name');
            $table->string('Account_Number');
            $table->string('commission_amount');
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
        Schema::dropIfExists('vendors');
    }
}
