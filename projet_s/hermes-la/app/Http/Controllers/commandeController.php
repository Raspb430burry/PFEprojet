<?php

namespace App\Http\Controllers;

use App\Models\commandes;
use App\Models\details;
use App\Models\produits;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class commandeController extends Controller
{
    public function create(Request $request){
        $commande=new commandes;
        $commande->users_id=$request->input('user_id');
        $commande->save();
        if($commande){
            $detail=new details;
            $detail->commande_id=$commande->id;
            $detail->produits_id=$request->input('produits_id');
            $detail->save();
        }
        return $commande . " " . $detail;
    }
    public function afficher(){
       $comm= DB::table('commandes')->join('details',"commandes.id",'=','commande_id')->where('statut',"=","encours")->get();
       return $comm ;

    }
    public function affichercomm(){
        $comm=commandes::all();
        return $comm;
    }
    public function delete($id){
        $comm=commandes::where('id',$id)->delete();
        if($comm){
            return["commande"=>"commandes bien supprimer"];
        }else{
            return["commande"=>"erreurs de supprission"];
        }

    }
}
