<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_sub_categories', function (Blueprint $table) {
            $table->id();
            $table->integer('child_sub_category_type_id')->nullable;
            $table->string('child_sub_category_name')->nullable;
            $table->string('category')->nullable;

            $table->string('sub_category')->nullable;
            $table->string('brand');
            $table->string('digital')->nullable;
            $table->string('banner')->nullable;
            $table->string('status');


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
        Schema::dropIfExists('child_sub_categories');
    }
}
