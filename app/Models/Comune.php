<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comune extends Model
{
    use HasFactory;

    public function annunci() {
        return $this->hasMany(Annuncio::class);
    }
}
