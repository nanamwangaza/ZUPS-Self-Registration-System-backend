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
        Schema::create('representatives', function (Blueprint $table) {
            $table->id();
            $table->string('jina_la_kwanza_la_mwakilishi');
            $table->string('jina_la_katikati_la_mwakilishi');
            $table->string('jina_la_mwisho_la_mwakilishi');
            $table->date('tarehe_ya_kuzaliwa');
            $table->string('namba_ya_kitambulisho_cha_mzanzibari_cha_mwakilishi');
            $table->string('uhusiano_na_mzee');
            $table->string('namba_ya_simu_ya_mwakilishi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('representatives');
    }
};
