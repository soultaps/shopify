<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function ajouterProduit()
    {
       $produit = Produit::create([
           "designation" => "Cahier",
           "description" => "La description de Cahier",
           "prix" => 500
       ]);

       dd($produit);
    }

    public function ajouterProduit2()
    {
        $produit = new Produit;
        $produit->designation = "Livre";
        $produit->description = "La description de Livre";
        $produit->prix = 1000;
        $produit->save();

        dd($produit);
    }

    public function updateProduit(Produit $produit)
    {
        // $produit = Produit::findOrFail($id);
        // dump($produit);
        $produit->designation = "Chemise";
        $produit->description = "La description de Chemise";
        $produit->prix = 6000;
        $produit->save();
        dd($produit);
    }

    public function updateProduit2($id)
    {
        // $produit =  Produit::findOrFail(2);
        // dd($produit);
        $result = Produit::where("id", $id)->update([
            "designation" => "Tricot",
            "description" => "La description de Tricot",
            "prix" => 3500,
        ]);

        dd($result);
    }

    public function supprimerProduit(int $id)
    {
        $result = Produit::destroy($id);
        dd($result);
    }
}
