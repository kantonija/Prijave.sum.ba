<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pitanjaRadionice extends Model
{
    protected $table = 'pitanjaradionice';

    use HasFactory;

    protected $fillable = [
        'NazivPitanja',
        'OpcijePitanja',
        'VrstaPodatka',
        'radionice'
    ];

    public function radionica(){
        return $this->belongsTo(radionica::class);
    }
}
