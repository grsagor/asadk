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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('order_number')->unique();
            $table->decimal('subtotal', 10, 2);
            $table->decimal('tax', 10, 2)->default(0);
            $table->decimal('discount', 10, 2)->default(0);
            $table->string('discount_code')->nullable();
            $table->decimal('total', 10, 2);
            $table->enum('status', ['pending', 'processing', 'completed', 'failed', 'refunded'])
                  ->default('pending');
            $table->string('payment_method');
            $table->string('payment_id')->nullable();
            $table->json('payment_details')->nullable();
            $table->string('billing_email');
            $table->string('billing_name');
            $table->string('billing_address')->nullable();
            $table->string('billing_city')->nullable();
            $table->string('billing_country')->nullable();
            $table->string('billing_postcode')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['order_number', 'status']);
            $table->index('created_at');
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('template_id');
            $table->string('template_name');
            $table->decimal('price', 10, 2);
            $table->string('license_type')->default('standard');
            $table->json('template_metadata')->nullable();
            $table->timestamps();

            $table->foreign('order_id')
                  ->references('id')
                  ->on('orders')
                  ->onDelete('cascade');

            $table->foreign('template_id')
                  ->references('id')
                  ->on('templates')
                  ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
    }
};
