<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachments extends Model
{
    use HasFactory;

    protected $fillable = [
        'cheti_cha_kuzaliwa',
        'kitambulisho_cha_mzanzibari',
        'picha_ya_pasipoti',
    ];

}
