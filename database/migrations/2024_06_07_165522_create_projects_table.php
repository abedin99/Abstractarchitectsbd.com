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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('service_id')->constrained()->cascadeOnDelete();
            $table->string('title', 511);
            $table->string('slug', 511)->unique();
            $table->longText('content', 255)->nullable();
            $table->date('date');
            $table->string('location', 511);
            $table->integer('value');
            $table->string('client', 511);
            $table->boolean('status')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['title', 'slug']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
