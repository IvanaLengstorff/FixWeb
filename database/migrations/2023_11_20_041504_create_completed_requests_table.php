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
        Schema::create('completed_requests', function (Blueprint $table) {
            $table->id();

            $table->decimal('total',10,2)->default(0);
        
            $table->unsignedBigInteger('accepted_id');
            $table->foreign('accepted_id')->references('id')->on('accepted_requests')->onDelete('cascade')->onUpdate('cascade');
           
            $table->unsignedBigInteger('payment_id');
            $table->foreign('payment_id')->references('id')->on('payment_methods')->onDelete('cascade')->onUpdate('cascade');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('completed_requests');
    }
};
