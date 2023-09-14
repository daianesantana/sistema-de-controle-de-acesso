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
    {   Schema::create('presenca', function (Blueprint $table) {
        $table->id();
        $table->DateTime('data_presenca');
        $table->string('presenca');
        $table->unsignedBigInteger('alunos_id');
        $table-> foreign('alunos_id') -> references ('id') -> on ('alunos');
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presenca');
    }
};
