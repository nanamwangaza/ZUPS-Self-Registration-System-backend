<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pension extends Model
{
    use HasFactory;

    protected $fillable = [
        'tarehe_ya_kuzaliwa',
        'mtaa',
        'jinsia',
        'namba_ya_nyumba',
        'namba_ya_kitambulisho_cha_mzanzibari',
        'shehia',
        'wilaya',
        'mkoa',
        'hali_ya_ulemavu',
    ];

}

