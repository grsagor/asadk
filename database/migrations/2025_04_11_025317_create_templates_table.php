<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description');
            $table->decimal('price', 10, 2);
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->datetime('sale_starts_at')->nullable();
            $table->datetime('sale_ends_at')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('preview_url')->nullable();
            $table->string('file_path');
            $table->unsignedBigInteger('category_id');
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->unsignedInteger('downloads')->default(0);
            $table->json('specifications')->nullable();
            $table->string('version')->default('1.0.0');
            $table->text('changelog')->nullable();
            $table->boolean('featured')->default(false);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('restrict');

            $table->index(['status', 'featured']);
            $table->index('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('templates');
    }
};
