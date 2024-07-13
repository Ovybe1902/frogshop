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
        Schema::create('photo_articles', function (Blueprint $table) {
            $table->id('id_photo_article');
            $table->string('link');
            $table->unsignedBigInteger('id_article');
            $table->string('ref');
            $table->timestamps();
    
            $table->foreign('id_article')->references('id_article')->on('articles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_articles');
    }
};
