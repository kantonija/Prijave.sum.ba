<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class listaPrijava extends Model
{
    use HasFactory;

    protected $table = '_listaprijava';

    protected $fillable= [
        'IdKreatora',
        'IdRadionice'
    ];

    public function radionica()
    {
        return $this->belongsTo(Radionica::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function korisnik_podatak()
    {
        return $this->hasMany(korisnik_podatak::class);
    }
}
