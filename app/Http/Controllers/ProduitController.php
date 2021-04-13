<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProduitFormRequest;
use App\Models\Produit;
use App\Models\Category;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produits = Produit::orderByDesc("id")->paginate(15);
        return view("front-office.produits.index", [
            "produits" => $produits
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $produit = new Produit;
        return view("front-office.produits.create", [ 
            "categories" => $categories,
            "produit" => $produit,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProduitFormRequest $request)
    {
        // dd($request->designation);
        $produit = Produit::create([
            "designation" => $request->designation,
            "prix" => $request->prix,
            "category_id" => $request->category_id,
            "description" => $request->description,
        ]);

        return redirect()->route('produits.index')->with("statut", "Le produit a bien été ajouté !"); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produit $produit)
    {
        dd($produit);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produit $produit)
    {
        $categories = Category::all();
        return view("front-office.produits.edit", [
            "produit" => $produit,
            "categories" => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProduitFormRequest $request, $id)
    {

        Produit::where("id", $id)->update([
            "designation" => $request->designation,
            "prix" => $request->prix,
            "category_id" => $request->category_id,
            "description" => $request->description,
        ]);

        return redirect()->route("produits.index")->with("statut", "Le produit a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Produit::destroy($id);

        return redirect()->route('produits.index')->with("statut", "Le produit a bien été surpprimé");
    }
}
