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
        Schema::create('fbacks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("order_id");
            $table->double("evaluate")->default(0.0);
            $table->text("message");
            $table->boolean("replied")->default(false);
            $table->timestamps();

            $table->foreign("order_id")->references("id")->on("orders");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fbacks');
    }
};