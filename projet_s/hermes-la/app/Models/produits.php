<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produits extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'description',
        'prix',
        'quantity',
        'image',
        'categorie_id'

    ];
    public function categories(){
        $this->belongsToMany(categories::class);
    }
    public function commandes(){
        $this->belongsToMany(commandes::class);
    }
    public function paniers()
    {
        return $this->belongsToMany(paniers::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
