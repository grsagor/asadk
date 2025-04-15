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
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->string('title');
            $table->text('description');
            $table->text('short_description');
            $table->decimal('regular_price', 10, 2);
            $table->string('framework');
            $table->text('browser_compatibility');
            $table->string('documentation_status');
            $table->string('support_period');
            $table->string('category');
            $table->string('demo_url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
