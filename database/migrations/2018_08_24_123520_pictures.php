<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pictures', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->string('picture1')->nullable();
            $table->string('picture2')->nullable();
            $table->string('picture3')->nullable();
            $table->string('picture4')->nullable();
            $table->string('picture5')->nullable();
            $table->string('picture6')->nullable();
            $table->string('picture7')->nullable();
            $table->string('picture8')->nullable();
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
        Schema::dropIfExists('pictures');
    }
}
