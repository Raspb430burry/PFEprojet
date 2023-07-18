<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiements extends Model
{
    use HasFactory;
    protected $fillable=[
        'commande_id',
        'produits_id',
        'moyen_de_paiement',
        'montant',
    ];
    public function commande()
    {
        return $this->belongsTo(commandes::class);
    }
    public function panier()
    {
        return $this->belongsToMany(paniers::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
