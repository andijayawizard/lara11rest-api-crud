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
        Schema::create('menuwebs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('caption', 100)->nullable()->default('caption');
            $table->string('seq')->nullable()->default('sequence');
            $table->string('slug')->nullable()->default('slug');
            $table->enum('pub', ['0', '1'])->nullable();
            $table->text('ktrg');
            $table->text('ktrg1');
            $table->string('title')->nullable()->default('title');
            $table->string('keyword')->nullable()->default('keyword');
            $table->string('description')->nullable()->default('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menuwebs');
    }
};