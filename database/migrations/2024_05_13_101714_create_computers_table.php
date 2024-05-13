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
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 25);
            $table->string('model', 25);
            $table->string('slug', 60)->unique();
            $table->decimal('price', 7, 2);
            $table->string('type', 25);
            $table->string('cpu', 25);
            $table->tinyInteger('inch_diplay');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computers');
    }
};
