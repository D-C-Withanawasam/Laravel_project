<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // Lesson title
            $table->text('description');  // Lesson description
            $table->text('content')->nullable();  // Content for the lesson (optional)
            $table->string('file_path')->nullable();  // Path to the uploaded file (optional)
            $table->foreignId('course_id')->constrained()->onDelete('cascade');  // Foreign key to courses table
            $table->timestamps();  // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
