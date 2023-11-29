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
        Schema::create('web_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('web_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tag_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();

            $table->unique(['web_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('web_tags');
    }
};
