<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;

class categorieController extends Controller
{
    public function afficherCategorie(){
        $categorie=categories::all();
        return $categorie;
    }
    public function createCategorie(Request $request){
        $categorie=new categories;
        $categorie->nom=$request->input('nom');
        $categorie->description=$request->input('description');
        $categorie->save();
        return $categorie;
    }
   public function editC($id){
    $categorie=categories::find($id);
    return $categorie;
}
public function updateC(Request $request,$id){
    $categorie=categories::find($id);
    $categorie->nom=$request->input('nom');
    $categorie->description=$request->input('description');
    $categorie->save();
    return $categorie;


}
public function deleteC($id){
    $categorie=categories::where('id',$id)->delete();
    if($categorie){
        return["product"=>"product has ben deleted"];
    }else{
        return["product"=>"product has not be deleted"];
    }

}
}
