<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('users', function (Blueprint $table) {
            $table->string('surname');
        });

        Schema::create('categories', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('events', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->datetime('initial_date');
            $table->datetime('ending_date');
            $table->float('price');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category');
            $table->timestamps();
        });

        Schema::create('shopping', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->datetime('operation_date');
            $table->float('purchase_price');
            $table->unsignedBigInteger('events_id');
            $table->foreign('events_id')->references('id')->on('events');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
