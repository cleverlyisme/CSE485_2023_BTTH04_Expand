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
        Schema::create('choices', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('exam_id');
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('answer_id');
            $table->foreign('exam_id')->references('id')->on('exams');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('answer_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choices');
    }
};
