<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_id')
                ->constrained(table: 'chats')
                ->onDelete('cascade');
            $table->foreignId('user_id')
                ->comment('indicating who sent the message')
                ->constrained(table: 'users')
                ->onDelete('cascade');
            $table->text('message');
            $table->string('status')->default('sent')->comment('sent, delivered, seen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
