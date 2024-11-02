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
        Schema::create('available_currencies', function (Blueprint $table) {
            $table->id();
            $table->string('currency_code', 3)->unique();
            $table->timestamps();
        });

        Schema::create('exchange_rates', function (Blueprint $table) {
            $table->id();
            $table->string('from_currency_code', 3);
            $table->string('to_currency_code', 3);
            $table->decimal('rate', 18, 6);
            $table->timestamps();

            // Добавим внешние ключи
            $table->foreign('from_currency_code')
                  ->references('currency_code')
                  ->on('available_currencies')
                  ->onDelete('cascade');

            $table->foreign('to_currency_code')
                  ->references('currency_code')
                  ->on('available_currencies')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exchange_rates');
        Schema::dropIfExists('available_currencies');
    }
};
