<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dettaglio extends Model
{
    use HasFactory;
    protected $table = 'dettagli';
    public $timestamps = false;
    protected $primaryKey='annuncio_id';

    public function annuncio() {
        return $this->belongsTo(Annuncio::class);
    }
}
