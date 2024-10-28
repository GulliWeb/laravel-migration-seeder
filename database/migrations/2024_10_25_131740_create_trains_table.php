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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda');
            $table->string('Stazione_partenza');
            $table->string('Stazione_arrivo');
            $table->time('Orario_partenza');
            $table->time('Orario_arrivo');
            $table->string('Cod_treno');
            $table->integer('Num_carrpzze');
            $table->boolean('In_orario');
            $table->boolean('Cancellato');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};