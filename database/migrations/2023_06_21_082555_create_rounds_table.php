<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('rounds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->integer('score');
            $table->integer('holes_played')->default(18);
            $table->time('tee_off_time')->default(now());
            $table->time('round_end_time');
            $table->boolean('has_cart')->default(false);
            $table->boolean('is_handicap_included')->default(true);
            $table->enum('green_speed', ['N/A','slow', 'medium', 'fast'])->default('N/A');
            $table->string('comments')->nullable();
            $table->integer('beer_counter')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rounds');
    }
};
