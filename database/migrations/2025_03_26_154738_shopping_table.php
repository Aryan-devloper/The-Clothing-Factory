<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    public function up()
    {
        Schema::create('shopping', function (Blueprint $table) {
            $table->id();
            $table->string('order_id'); // Order ID comes first
            $table->string('product_name'); // No 'after' needed
            $table->string('size'); // No 'after' needed
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->date('date');
            $table->integer('quantity');
            $table->text('description')->nullable();
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('shopping');
    }
};
