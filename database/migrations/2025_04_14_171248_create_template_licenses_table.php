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
        Schema::dropIfExists('template_licenses');
        Schema::create('template_licenses', function (Blueprint $table) {
            $table->foreignId('template_id')->constrained()->onDelete('cascade');
            $table->foreignId('license_id')->constrained('license_types')->onDelete('cascade');
            $table->decimal('price', 10, 2);
            $table->timestamps();
            $table->primary(['template_id', 'license_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_licenses');
    }
};
