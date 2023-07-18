<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Representative extends Model
{
    use HasFactory;

    protected $fillable = [
        'jina_la_kwanza_la_mwakilishi',
        'jina_la_katikati_la_mwakilishi',
        'jina_la_mwisho_la_mwakilishi',
        'tarehe_ya_kuzaliwa',
        'namba_ya_kitambulisho_cha_mzanzibari_cha_mwakilishi',
        'uhusiano_na_mzee',
        'namba_ya_simu_ya_mwakilishi'
    ];
}
