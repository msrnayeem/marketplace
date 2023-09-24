<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('buyer_id')->constrained('users');
            $table->foreignId('seller_id')->constrained('users');
            $table->foreignId('gig_id')->constrained()->cascadeOnDelete();
            $table->foreignId('gig_package_id')->constrained()->cascadeOnDelete();
            $table->date('delivery_date')->default(null)->nullable();
            $table->decimal('amount', 8, 2);
            $table->string('status')->default('pending');
            $table->boolean('is_priority')->default(false);
            $table->timestamps();
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