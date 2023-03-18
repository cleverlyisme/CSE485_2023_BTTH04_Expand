<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('grade_category_id');
            $table->string('name', 150);
            $table->string('description', 255);
            $table->dateTime('openTime');
            $table->dateTime('closeTime');
            $table->timestamp('createdAt')->useCurrent();
            $table->time('timeLimit');
            $table->timestamps();
            $table->double('minGrade');
            $table->integer('numberOfTry');
            $table->integer('limitPagnation');
            $table->foreign('grade_category_id')->references('id')->on('gradeCategories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exams');
    }
};
