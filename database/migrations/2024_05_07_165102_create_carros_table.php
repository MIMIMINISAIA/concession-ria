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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('modelo', 120)->nullable(false);
            $table->string('ano', 120)->nullable(false);
            $table->string('marca', 120)->nullable(false);
            $table->string('cor', 120)->nullable(false);
            $table->string('peso', 120)->nullable(false);
            $table->string('potencia', 120)->nullable(false);
            $table->string('descricao', 120)->nullable(false);
            $table->decimal('valor')->decimal()->nullable(false);
            
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
