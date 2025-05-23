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
        Schema::create('declaração', function (Blueprint $table) {
            $table->id();
            $table->string('hash');
            $table->datetime('data');

            $table->unsignedBigInteger('aluno_id'); 
            $table->foreign('aluno_id')->references('id')->on('alunos')->onDelete('cascade');
        
            $table->unsignedBigInteger('comprovante_id');
            $table->foreign('comprovante_id')->references('id')->on('comprovante')->onDelete('cascade');
        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('declaração');
    }
};
