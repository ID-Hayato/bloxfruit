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
        Schema::create('another_fruit_skills', function (Blueprint $table) {
            $table->id();
            $table->string('fruit_name');
            $table->string('another_skill_type');
            $table->foreignId('another_skill_tap_id')->nullable();
            $table->foreignId('another_skill_z_id')->nullable();
            $table->foreignId('another_skill_x_id')->nullable();
            $table->foreignId('another_skill_c_id')->nullable();
            $table->foreignId('another_skill_v_id')->nullable();
            $table->foreignId('another_skill_f_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('another_fruit_skills');
    }
};
