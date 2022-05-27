<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
    public $table="residents";
    protected $fillable = [
        'id',
        'lmmeuble',
        'appartement',
        'nom',
        'prenom',
        'ville',
        'email',
        'tele',
        'photo',

    ];
}
