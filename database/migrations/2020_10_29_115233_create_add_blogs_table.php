<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable;
            $table->string('summery')->nullable;
            $table->string('author')->nullable;
            $table->string('date')->nullable;
            $table->string('description')->nullable;
            $table->string('status')->nullable;
            $table->string('blog_category')->nullable;
            $table->integer('number_of_view');
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
        Schema::dropIfExists('add_blogs');
    }
}
