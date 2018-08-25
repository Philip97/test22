<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Countertops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('countertops', function (Blueprint $table) {
            $table->integer('order_id');
            $table->string('Concrete')->nullable();
            $table->string('Quartz')->nullable();
            $table->string('Formica')->nullable();
            $table->string('Granite')->nullable();
            $table->string('Marble')->nullable();
            $table->string('Tile')->nullable();
            $table->string('Paper_Stone')->nullable();
            $table->string('Butcher_Block')->nullable();
            $table->timestamp('created_at')->nullable();
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('countertops');
    }
}
