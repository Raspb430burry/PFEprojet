<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class commandes extends Model
{
    use HasFactory;
    protected $fillable=[
        'users_id',
        'statut',

    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function produits()
    {
        return $this->belongsToMany(produits::class);
    }

    public function paiement()
    {
        return $this->hasOne(paiements::class);
    }
}
