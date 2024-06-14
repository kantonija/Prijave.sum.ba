<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class korisnikPodatak extends Model
{
    use HasFactory;

    protected $fillable = [
        'Odgovor',
        'Redoslijed',
        'IdPrijave'
    ];

    public function listaPrijava(){
        return $this->belongsTo(listaPrijava::class);
    }
}
