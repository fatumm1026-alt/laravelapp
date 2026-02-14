<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('student_id'); // No FK
            $table->string('book_title');

            $table->date('issue_date')->nullable();
            $table->date('return_date')->nullable();

            $table->string('status');

            $table->timestamps();
            // $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
