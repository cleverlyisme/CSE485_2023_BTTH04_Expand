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
        Schema::create('subCategories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_cate_id');
            $table->unsignedInteger('tag_id');
            $table->string('name', 150);
            $table->string('desription', 255);
            $table->foreign('parent_cate_id')->references('id')->on('parentCategories');
            $table->foreign('tag_id')->references('id')->on('tags');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subCategories');
    }
};
