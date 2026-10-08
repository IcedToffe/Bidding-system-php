<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackWebsiteTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // User's name
            $table->string('email'); // User's email
            $table->text('message'); // Feedback message
            $table->timestamps(); // Automatically adds created_at and updated_at
            $table->unsignedBigInteger('user_id')->nullable(); // Allow null values for anonymous feedback
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbackwebsite');
    }
};
