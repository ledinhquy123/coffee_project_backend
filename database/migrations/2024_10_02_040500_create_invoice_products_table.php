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
        Schema::create('invoice_products', function (Blueprint $table) {
            $table->id();
            $table->dateTime("expire_date")->nullable();
            $table->unsignedBigInteger("product_id");
            $table->unsignedBigInteger("invoice_id");
            $table->timestamps();

            $table->foreign("product_id")->references("id")->on("products");
            $table->foreign("invoice_id")->references("id")->on("invoices");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_products');
    }
};