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
        Schema::create('meeting_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('telegram')->unique();
            $table->string('phone');
            $table->string('email')->unique();
            $table->enum('role', ['Developer', 'Devops', 'UI/UX Desginer', 'Marketing', 'Translator', 'Researcher']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_forms');
    }
};
