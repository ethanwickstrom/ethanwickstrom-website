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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('user_id');
            $table->string('name');
            $table->text('description');
            $table->string('slug');
            $table->string('banner_picture')->nullable();
            $table->string('external_url')->nullable();
            $table->unsignedBigInteger('projectable_id');
            $table->string('projectable_type');

            $table->index('projectable_id');
            $table->index('projectable_type');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
