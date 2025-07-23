<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class PanierController extends Controller
{
   public function index()
{
    $panier = session('panier', []);
    $ids = array_keys($panier);

    $items = Packages::whereIn('id', $ids)->get()->map(function ($item) use ($panier) {
        $item->quantite = $panier[$item->id]['quantite'];
        $item->prix_panier = $panier[$item->id]['prix'];
        return $item;
    });

    $totaleDuPanier = $items->sum(function ($item) {
        return $item->prix_panier * $item->quantite;
    });

    return view('panier', compact('items', 'totaleDuPanier'));
}

}
