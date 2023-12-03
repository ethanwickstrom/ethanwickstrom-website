<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('photo_collection_photo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('photo_id');
            $table->foreignId('photo_collection_id');
            $table->integer('order')->unique();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo_collection_photo');
    }
};
