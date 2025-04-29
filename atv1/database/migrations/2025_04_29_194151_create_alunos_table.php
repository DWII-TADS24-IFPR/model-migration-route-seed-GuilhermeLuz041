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
        Schema::create('alunos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('cpf');
            $table->string('email');
            $table->string('senha');
            //foreings
            $table->unsignedBigInteger('curso_id'); 
            $table->foreign('curso_id')->references('id')->on('curso')->onDelete('cascade');

            $table->unsignedBigInteger('turma_Id'); 
            $table->foreign('turma_id')->references('id')->on('turma')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alunos.');
    }
};
