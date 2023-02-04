<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $table = "animal";

    protected $fillable = [
        'id_type',
        'imie',
        'wiek',
        'obrazek',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class, 'id_type', 'id');
        
    }
}
