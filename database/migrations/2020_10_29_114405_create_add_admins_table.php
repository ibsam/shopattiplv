<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_admins', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable;
            $table->string('phone')->nullable;
            $table->string('address')->nullable;
            $table->string('email')->nullable;
            $table->string('password')->nullable;
            $table->string('role')->nullable;
            $table->string('timestamp')->nullable;

            
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
        Schema::dropIfExists('add_admins');
    }
}
