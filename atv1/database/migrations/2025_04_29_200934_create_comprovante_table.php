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
        Schema::create('comprovante', function (Blueprint $table) {
            $table->id();
            $table->float('horas');
            $table->string('atividade');
            //foreings
            $table->unsignedBigInteger('categoria_id'); 
            $table->foreign('categoria_id')->references('id')->on('categoria')->onDelete('cascade');

            $table->unsignedBigInteger('aluno_id'); 
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comprovante');
    }
};
