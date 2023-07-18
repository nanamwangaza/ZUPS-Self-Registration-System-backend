<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePensionsTable extends Migration
{
    public function up()
    {
        Schema::create('pensions', function (Blueprint $table) {
            $table->id();
            $table->date('tarehe_ya_kuzaliwa');
            $table->string('jinsia');
            $table->string('mtaa');
            $table->string('namba_ya_nyumba');
            $table->string('namba_ya_kitambulisho_cha_mzanzibari');
            $table->string('shehia');
            $table->string('wilaya');
            $table->string('mkoa');
            $table->string('hali_ya_ulemavu');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pensions');
    }
}
