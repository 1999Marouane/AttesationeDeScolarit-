<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['verify'];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
