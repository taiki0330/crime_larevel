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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genre_id');
            $table->string('crime_fact', 255)->nullable(); // 犯罪事実、NULL許容
            $table->string('crime_name', 255)->nullable(); // 罪名、NULL許容
            $table->date('crime_date')->nullable(); // 発生日、NULL許容
            $table->time('crime_time')->nullable(); // 発生時間（TIME型）、NULL許容
            $table->string('crime_place')->nullable(); // 発生場所、NULL許容
            $table->string('suspect_honseki', 255)->nullable(); // 被疑者本籍、NULL許容
            $table->string('suspect_address', 255)->nullable(); // 被疑者住居、NULL許容
            $table->string('suspect_work', 255)->nullable(); // 被疑者職業、NULL許容
            $table->string('suspect_name', 255)->nullable(); // 被疑者氏名、NULL許容
            $table->date('suspect_birthday')->nullable(); // 被疑者生年月日、NULL許容
            $table->string('victim_address', 255)->nullable(); // 被害者住居、NULL許容
            $table->string('victim_work', 255)->nullable(); // 被害者職業、NULL許容
            $table->string('victim_name', 255)->nullable(); // 被害者氏名、NULL許容
            $table->date('victim_birthday')->nullable(); // 被害者生年月日、NULL許容
            $table->timestamps();
            $table
                ->foreign('genre_id')
                ->references('id')
                ->on('genres')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
