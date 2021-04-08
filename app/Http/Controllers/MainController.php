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
}
