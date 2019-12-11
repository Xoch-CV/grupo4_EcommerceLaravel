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
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname');
            $table->integer('role')->nullable();
        });

        Schema::create('categories', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('icono');
            $table->timestamps();
 
        });

        Schema::create('events', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('description');
            $table->datetime('initial_date');
            $table->datetime('ending_date');
            $table->float('price')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->string('image')->nullable();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('carts', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->float('total_price');
            $table->timestamps();
            $table->datetime('purchased_at')->nullable();
        });

        Schema::create('cart_event', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->Integer('qty')->nullable();
            $table->float('total_event')->nullable();
            $table->unsignedBigInteger('cart_id');
            $table->unsignedBigInteger('event_id');
            $table->float('price')->nullable();
            $table->timestamps();

            $table->foreign('cart_id')->references('id')->on('carts');
            $table->foreign('event_id')->references('id')->on('events');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_event');
        Schema::dropIfExists('carts');
        Schema::dropIfExists('events');
        Schema::dropIfExists('categories');

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('role');
        });
    }
}
