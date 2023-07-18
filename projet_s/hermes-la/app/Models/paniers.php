<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paniers extends Model
{
    use HasFactory;
    protected $fillable=[
        'users_id',
        'produits_id',
        'quantity',
    ];
    public function produits()
    {
        return $this->belongsToMany(produits::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function commande()
    {
        return $this->hasOne(commandes::class);
    }
    public function paiements()
    {
        return $this->hasMany(paiements::class);
    }
}
