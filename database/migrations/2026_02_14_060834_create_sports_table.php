<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sports', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_id'); // No FK
            $table->string('sport_name');
            $table->string('team_name')->nullable();
            $table->string('position')->nullable();

            $table->string('coach_name')->nullable();
            $table->date('join_date')->nullable();

            $table->string('status');

            $table->timestamps();
            // $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sports');
    }
};

