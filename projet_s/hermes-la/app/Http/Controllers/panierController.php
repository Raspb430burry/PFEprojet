<?php

namespace App\Http\Controllers;

use App\Models\paniers;
use App\Models\produits;
use Illuminate\Http\Request;

class panierController extends Controller
{
    // public function addtocart($id)
    // {
    //     $product = produits::find($id);

    //     $cart = session()->get('cart', []);

    //     if (!isset($cart[$product->id])) {
    //         $cart[$product->id] = $product;
    //         session()->put('cart', $cart);
    //     }

    //     return response()->json(['message' => 'Produit ajouté au panier avec succès']);
    // }
    // public function afficherPanier()
    // {
    //     $cart = session()->get('cart', []);

    //     return response()->json($cart);
    // }
    // public function ajouterProduitAuPanier($panierId, $produitId)
    // {
    //     $panier = paniers::find($panierId);
    //     $produit = produits::find($produitId);

    //     if ($panier && $produit) {
    //         $panier->produits()->attach($produit);
    //         return response()->json(['message' => 'Produit ajouté au panier avec succès']);
    //     }

    //     return response()->json(['message' => 'Impossible d\'ajouter le produit au panier'], 400);
    // }


}
