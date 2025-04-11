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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->timestamps();
        });

        Schema::create('template_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('template_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->primary(['template_id', 'tag_id']);
            
            $table->foreign('template_id')
                  ->references('id')
                  ->on('templates')
                  ->onDelete('cascade');
                  
            $table->foreign('tag_id')
                  ->references('id')
                  ->on('tags')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('template_tag');
        Schema::dropIfExists('tags');
    }
};
