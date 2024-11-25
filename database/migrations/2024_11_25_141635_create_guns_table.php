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
        Schema::create('guns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('skill_tap_id');
            $table->foreignId('skill_z_id');
            $table->integer('skill_z_mastery');
            $table->foreignId('skill_x_id');
            $table->integer('skill_x_mastery');
            $table->string('rarity');
            $table->string('howtogetit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guns');
    }
};
