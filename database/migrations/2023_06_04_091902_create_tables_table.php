<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id');
            $table->foreignId('items_id');
            $table->integer('pcs');
            $table->date('season');
        });
        
        
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->inaeger('grade');
            $table->text('mail');
            $table->text('password');
            $table->integer('number');
        });
        
            
        Schema::create('items', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('shop_id');
            $table->string('name');
            $table->integer('price');
            
        });
        
        
        Schema::create('shops', function (Blueprint $table) {
            $table->id('id');
            $table->text();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tables');
    }
}
