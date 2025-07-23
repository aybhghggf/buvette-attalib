<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'nom_complet',
        'telephone',
        'localisation',
        'informations_supplementaires',
        'total_prix',
        'statut',
        'items'
    ];

    protected $casts = [
        'items' => 'array',
        'total_prix' => 'decimal:2'
    ];
}
