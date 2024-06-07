<?php

namespace App\Models;

use App\Models\Radionica;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PitanjaRadionice extends Model
{
    protected $table = 'pitanjaradionice';

    use HasFactory;

    protected $fillable= [
        'NazivPitanja',
        'OpcijePitanja',
        'VrstePodataka',
        'IdRadionice'
    ];

    public function radionica()
    {
        return $this->belongsTo(Radionica::class);
    }
}
