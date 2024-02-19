<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    protected $fillable=[
        'etudiant_id',
        'path'
    ];
    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
