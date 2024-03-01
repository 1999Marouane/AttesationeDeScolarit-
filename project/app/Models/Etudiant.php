<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{

    protected $fillable = [
        'apoge',
        'cin',
        'cne',
        'prenom',
        'nom',
        'dateNaiss',
    ];
    public function photo()
    {
        return $this->hasMany(photo::class);
    }
    public function card()
    {
        return $this->hasOne(Card::class);
    }
}
