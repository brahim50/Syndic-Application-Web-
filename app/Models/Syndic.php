<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Syndic extends Model
{
    use HasFactory;
    public $table="syndics";
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'ville',
        'tele',
        'photo',
        'password',
    ];
}
