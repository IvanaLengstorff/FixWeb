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
        Schema::create('service_mechanicals', function (Blueprint $table) {
            $table->id();
            $table->decimal('price',10,2)->default(0);

            $table->unsignedBigInteger('mechanical_id');
            $table->foreign('mechanical_id')->references('id')->on('mechanical_workshops')->onDelete('cascade')->onUpdate('cascade');
           
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_mechanicals');
    }
};
