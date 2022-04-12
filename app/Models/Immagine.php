<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immagine extends Model
{
    use HasFactory;
    protected $table = 'immagini';
    public $timestamps = false;
    
    public function annuncio() {
        return $this->belongsTo(Annuncio::class);
    }
}
