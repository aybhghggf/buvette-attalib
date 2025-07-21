<?php

namespace App\Http\Controllers;

use App\Models\Packages;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct($id)
    {
        $produit = Packages::find($id);
        return view('Produit', compact('produit'));
    }
    public function ajouterPanier($id)
    {
        $pack = packages::findOrFail($id);
        $panier = session()->get('panier', []);

        if (isset($panier[$id])) {
            $panier[$id]['quantite']++;
        } else {
            $panier[$id] = [
                'nom' => $pack->nom,
                'prix' => $pack->prix,
                'image' => $pack->image,
                'quantite' => 1,
            ];
        }

        session()->put('panier', $panier);

        return redirect()->back()->with('success', 'Le Pack ajouté au panier !');
    }
}
