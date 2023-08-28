<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personnes extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nom',
        'postnom',
        'prenom',
        'numero-national',
        'date-impression',
        'numero-serie',
        'etat_id',
        'observation',
        'demandeur'
    ];
     /**
     * Get the user that owns the employers
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etat()
    {
        return $this->belongsTo(etats::class);
    }
}
