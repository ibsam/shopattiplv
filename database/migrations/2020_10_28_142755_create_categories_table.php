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
            $table->integer('category_id');
            $table->integer('category_type_id');
            $table->integer('category_level');
            $table->string('level_name');
            $table->string('name');
            $table->string('url_name')->nullable();
            $table->string('description')->nullable();
            $table->string('digital')->nullable();
            $table->string('banner')->nullable();
            $table->string('data_brands')->nullable();
            $table->string('data_vendors')->nullable()->length(500);
            $table->json('data_subset')->nullable();
            $table->string('status')->nullable();
            $table->double('commision')->default(0);
            $table->boolean('active');
            $table->boolean('menubit')->default(0);
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
