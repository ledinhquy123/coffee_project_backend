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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("cart_id");
            $table->tinyInteger("status")->nullable();
            $table->unsignedBigInteger("payment_method_id");
            $table->double("total_price")->default(0.0);
            $table->timestamps();

            $table->foreign("cart_id")->references("id")->on("carts");
            $table->foreign("payment_method_id")->references("id")->on("payment_methods");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};