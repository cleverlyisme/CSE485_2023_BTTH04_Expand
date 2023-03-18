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
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_category_id')->nullable();
            $table->unsignedInteger('sub_category_id')->nullable();
            // $table->unsignedInteger('correct_answer_id');
            $table->string('text', 255);
            $table->double('points');
            $table->foreign('parent_category_id')->references('id')->on('parentCategories');
            $table->foreign('sub_category_id')->references('id')->on('subCategories');
            // $table->foreign('correct_answer_id')->references('id')->on('answers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
