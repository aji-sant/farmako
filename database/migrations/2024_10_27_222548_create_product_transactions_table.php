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
        Schema::create('product_transactions', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('post_code');
            $table->string('phone_number');
            $table->string('city');
            $table->string('proof');
            $table->boolean('id_paid');
            $table->unsignedBiginteger('total_amount');
            $table->text('notes');
            $table->foreignId('user_id')->contrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_transactions');
    }
};
