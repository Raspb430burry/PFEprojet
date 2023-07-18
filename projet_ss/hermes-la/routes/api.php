<?php

use App\Http\Controllers\categorieController;
use App\Http\Controllers\commandeController;
use App\Http\Controllers\panierController;
use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('register',[UserController::class,'Register']);
Route::post('login',[UserController::class,'Login']);
Route::post('addproduct',[productController::class,'addProduct']);
//Categorie Route :
Route::get('afficherCategorie',[categorieController::class,'afficherCategorie']);
Route::post('createCategorie',[categorieController::class,'createCategorie']);
Route::get('editcategorie/{id}',[categorieController::class,'editC']);
Route::put('updateCategorie/{id}',[categorieController::class,'updateC']);
Route::delete('deleteC/{id}',[categorieController::class,'deleteC']);

//Product Route :
Route::get('list',[productController::class,'list']);
Route::post('addproduct',[productController::class,'addProduct']);
Route::delete('delete/{id}',[productController::class,'delete']);
Route::patch('update/{id}',[productController::class,'update']);
Route::get('edit/{id}',[productController::class,'edit']);
Route::get('serch/{key}',[productController::class,'serch']);
Route::get('afficherparcategorie/{key}',[productController::class,'afficherparcategorie']);
Route::get('detail/{id}',[productController::class,'detail']);
// Route::get('/ajouteraupanier/{id}',[panierController::class,'addtocart']);
// Route::get('panier',[panierController::class,'afficherPanier']);
// Route::post('/panier/{panierId}/produit/{produitId}', [panierController::class,'ajouterProduitAuPanier']);
Route::post('cree',[commandeController::class,'create']);
Route::get('afficher',[commandeController::class,'afficher']);
Route::get('afficher/commandes',[commandeController::class,'affichercomm']);
Route::delete('delete/commande/{id}',[commandeController::class,'delete']);














