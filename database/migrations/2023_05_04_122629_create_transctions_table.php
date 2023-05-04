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
        Schema::create('transctions', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('account_id');
            $table->timestamp('transaction_date');
            $table->text('description');
            $table->string('debit_credit');
            $table->bigInteger('ammount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transctions');
    }
};
