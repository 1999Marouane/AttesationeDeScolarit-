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
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
}
