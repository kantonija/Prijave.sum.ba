<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class radionica extends Model
{
    use HasFactory;

    protected $table = 'radionica';

    protected $fillable = [
        'NazivRadionice',
        'OpisRadionice',
        'UrlSlike',
        'VoditeljRadionice',
        'Tagovi',
        'DatumPocetka',
        'DatumZavrsetka',
        'PrijaveDo',
        'IdKreatora'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pitanjaRadionice(){
        return $this->hasMany(pitanjaRadionice::class);
    }

    public function listaPrijava(){
        return $this->hasMany(listaPrijava::class);
    }
}