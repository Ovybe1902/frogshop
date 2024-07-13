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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('id_transaction');
            $table->unsignedBigInteger('id_frog');
            $table->double('price');
            $table->dateTime('transac_date');
            $table->unsignedBigInteger('id_client');
            $table->integer('status');
            $table->timestamps();
    
            $table->foreign('id_frog')->references('id_frog')->on('frogs')->onDelete('cascade');
            $table->foreign('id_client')->references('id_client')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
