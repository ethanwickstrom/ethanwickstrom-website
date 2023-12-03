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
        Schema::create('articles', function (Blueprint $table) {
            $table->unsignedBigInteger('id');
            $table->foreignId('user_id');
            $table->foreignId('category_id');
            $table->string('title');
            $table->text('content');
            $table->string('slug');
            $table->unsignedBigInteger('articleable_id');
            $table->string('articleable_type');

            $table->index('articleable_id');
            $table->index('articleable_type');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
