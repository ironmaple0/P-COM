<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('owner_id');
            //$table->integer('owners_id');
            $table->string('week_day');
            $table->DATETIME('start_time');
            $table->DATETIME('end_time');
            $table->string('term');
            $table->integer('fee');
            $table->string('location');
            $table->integer('number');
            $table->string('size');
            $table->string('picture');
            $table->integer('status');
            $table->string('remark');
            $table->timestamps();
            $table->foreign('owner_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('owners');
    }
}
