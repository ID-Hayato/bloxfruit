<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Ramsey\Uuid\Type\Integer;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fruits', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('skill_tap_id')->nullable();
            $table->foreignId('skill_z_id');
            $table->integer('skill_z_mastery');
            $table->foreignId('skill_x_id');
            $table->integer('skill_x_mastery');
            $table->foreignId('skill_c_id');
            $table->integer('skill_c_mastery');
            $table->foreignId('skill_v_id')->nullable();
            $table->integer('skill_v_mastery')->nullable();
            $table->foreignId('skill_f_id')->nullable();
            $table->integer('skill_f_mastery')->nullable();
            $table->string('rarity');
            $table->integer('price');
            $table->foreignId('another_skill_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fruits');
    }
};
