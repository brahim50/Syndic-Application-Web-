<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lmmeuble extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'numero',
        'nom',
        'etage',
        'addresse',
        'ville',
        'photo',
    ];
}
