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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no');
            $table->integer('type')->comment('1: sale, 2: purchase');
            $table->dateTime('transaction_date');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('currency_id');
            $table->decimal('sell_out_price', 10, 2);
            $table->unsignedBigInteger('delivery_id');
            $table->decimal('delivery_fee');
            $table->decimal('grand_total');
            $table->decimal('total_received');
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
