<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('return_exchanges', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('order_number');
            $table->string('email');
            $table->string('product_name');
            $table->string('reason')->nullable();
            $table->enum('request_type', ['return', 'exchange']); // 'return' or 'exchange'
            $table->text('details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('return');
    }
};
