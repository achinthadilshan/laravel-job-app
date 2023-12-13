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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title', 255);
            $table->string('image', 255)->default('https://picsum.photos/200');
            $table->string('company', 255);
            $table->string('email', 255);
            $table->string('website', 255);
            $table->string('type', 255);
            $table->string('city', 255);
            $table->string('tags', 255);
            $table->longText('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
