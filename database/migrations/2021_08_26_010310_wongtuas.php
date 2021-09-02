<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Wongtuas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wongtuas', function (Blueprint $table) {
            $table->id(); //Big Integer, PK, AI
            $table->string('name', 100);
            $table->string('gender', 10);
            $table->Integer('umur');
            $table->timestamps(); //created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wongtuas');
    }
}
