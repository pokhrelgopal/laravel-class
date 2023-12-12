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
        Schema::create('tbl_comments', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('status');
            $table->timestamp('create_time');
            $table->foreignId('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('email');
            $table->string('url');
            $table->foreignId('post_id')->references('id')->on('tbl_posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_comments');
    }
};
