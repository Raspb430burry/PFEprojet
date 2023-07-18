<?php

namespace App\Http\Controllers;

use App\Models\categories;
use App\Models\produits;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function addProduct(Request $request){
        // return $request->file('file')->store('imageProducts');
        // return $request->input();
        $product=new produits;
        $product->nom=$request->input('nom');
        $product->description=$request->input('description');
        $product->prix=$request->input('prix');
        $product->quantity=$request->input('quantity');
        $product->image=$request->file('image')->move('imagepruducts');
        $product->categorie_id=$request->input('categorie_id');
        $product->save();
        return $product;
    }
    public function list(){
        return produits::all();
    }
    public function delete($id){
        $product=produits::where('id',$id)->delete();
        if($product){
            return["product"=>"product has ben deleted"];
        }else{
            return["product"=>"product has not be deleted"];
        }

    }
    public function edit($id){
        $product=produits::find($id);
        return $product;

    }
    public function update(Request $request,$id){
        $product=produits::find($id);
        $product->nom=$request->input('nom');
        $product->description=$request->input('description');
        $product->prix=$request->input('prix');
        $product->quantity=$request->input('quantity');
         $product->image=$request->file('image')->store('imagepruducts');
        $product->categorie_id=$request->input('categorie_id');
        $product->save();
        return $product;
    }
    public function serch($key){
        return produits::where('nom','Like',"%$key%")->get();
    }
    public function afficherparcategorie( Request $request, $id  )
    {
        $product=produits::where('categorie_id',$id )->get();
        return $product;
}
public function detail($id){
    $product=produits::find($id);
    return $product;

}
}
