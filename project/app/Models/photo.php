<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    // In your Eloquent model
    protected $fillable = ['etudiant_id', 'path', 'updated_at', 'created_at'];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }
}
