<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    // Polja koja su masovno dodeljiva
    protected $fillable = ['name'];

    // Definisanje odnosa sa User modelom
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
