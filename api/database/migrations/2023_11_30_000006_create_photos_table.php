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
        Schema::create('photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image_path');
            $table->string('thumbnail_path');
            $table->string('alt_text');
            $table->boolean('is_featured')->default(false);
            $table
                ->enum('visibility', ['public', 'private', 'archived'])
                ->default('private');
            $table->integer('order')->unique();
            $table->dateTimeTz('taken_at')->nullable();
            $table->string('camera_make')->nullable();
            $table->string('camera_model')->nullable();
            $table->string('focal_length')->nullable();
            $table->string('exposure_time')->nullable();
            $table->string('aperture')->nullable();
            $table->integer('iso')->nullable();
            $table->decimal('gps_latitude')->nullable();
            $table->decimal('gps_longitude')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photos');
    }
};
