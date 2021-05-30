<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewWorkers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_workers', function (Blueprint $table) {

            $table->increments('id');

            $table->char('name', 128);
            $table->char('lastname', 128);
            $table->integer('age');
            $table->char('gender', 60);
            $table->integer('days_off');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('new_workers');
    }
}
