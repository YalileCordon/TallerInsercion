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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
            $table->string('business_name')->nullable();
            $table->string('nit')->unique();
            $table->integer('verification_digit');
            $table->string('corporate_email')->nullable();
            $table->string('city');
            $table->string('address');
            $table->integer('number_employees');
            $table->timestamp('registration_Date')->nullable();
            $table->boolean('exporter');        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
