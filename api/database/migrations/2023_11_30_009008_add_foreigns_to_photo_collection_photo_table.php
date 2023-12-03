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
        Schema::table('photo_collection_photo', function (Blueprint $table) {
            $table
                ->foreign('photo_id')
                ->references('id')
                ->on('photos')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table
                ->foreign('photo_collection_id')
                ->references('id')
                ->on('photo_collections')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('photo_collection_photo', function (Blueprint $table) {
            $table->dropForeign(['photo_id']);
            $table->dropForeign(['photo_collection_id']);
        });
    }
};
