<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->boolean('active')->default(1);
            $table->string('Programming_basics');
            $table->string('computer_programming');
            $table->string('Computer_assembly');
            $table->string('Databases');
            $table->string('Technical_Support');
            $table->string('Career_guidance');
            $table->string('general_appreciation');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('grades');
    }
};
