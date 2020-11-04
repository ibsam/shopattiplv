<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('category_type_id')->default(1);
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('digital')->nullable();
            $table->string('banner');
            $table->string('data_brands')->nullable();
            $table->string('data_vendors')->nullable();
            $table->json('data_subset')->nullable();
            $table->string('status')->nullable();
            $table->boolean('active');
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
        Schema::dropIfExists('categories');
    }
}
