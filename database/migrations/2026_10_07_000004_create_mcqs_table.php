<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mcqs', function (Blueprint $table) {
            $table->id();
            $table->text('question');
            $table->string('a');
            $table->string('b');
            $table->string('c');
            $table->string('d');
            $table->string('correct_ans');
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreignId('quiz_id')->constrained('quizzes')->onDelete('cascade');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mcqs');
    }
};
