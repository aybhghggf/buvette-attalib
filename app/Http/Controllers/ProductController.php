<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use App\Models\Commande;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProduct($id)
    {
        $produit = Packages::find($id);
        return view('Produit', compact('produit'));
    }
    public function ajouterPanier(Request $request, $id)
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

    if ($request->ajax()) {
        return response()->json([
            'message' => 'Pack ajouté au panier !',
            'totalItems' => count($panier)
        ]);
    }

    return redirect()->back()->with('success', 'Le Pack ajouté au panier !');
}

   public function SupprimerPanier($id)
{
    $panier = session()->get('panier', []);
    unset($panier[$id]);
    session()->put('panier', $panier);

    return response()->json([
        'message' => 'Le Pack supprimé du panier !',
        'totalItems' => count($panier)
    ]);
}

    public function passerCommande(Request $request)
    {
        // Validate the form data
        $request->validate([
            'nom_complet' => 'required|string|max:255',
            'telephone' => 'required|string|max:20',
            'localisation' => 'required|string|max:255',
            'informations_supplementaires' => 'nullable|string|max:1000'
        ]);

        // Get cart items from session
        $panier = session()->get('panier', []);
        
        if (empty($panier)) {
            return response()->json([
                'success' => false,
                'message' => 'Votre panier est vide.'
            ], 400);
        }

        // Calculate total price
        $totalPrix = 0;
        $items = [];
        
        foreach ($panier as $id => $item) {
            $itemTotal = $item['prix'] * $item['quantite'];
            $totalPrix += $itemTotal;
            
            $items[] = [
                'id' => $id,
                'nom' => $item['nom'],
                'prix_unitaire' => $item['prix'],
                'quantite' => $item['quantite'],
                'image' => $item['image'],
                'total' => $itemTotal
            ];
        }

        // Create the order
        $commande = Commande::create([
            'nom_complet' => $request->nom_complet,
            'telephone' => $request->telephone,
            'localisation' => $request->localisation,
            'informations_supplementaires' => $request->informations_supplementaires,
            'total_prix' => $totalPrix,
            'statut' => 'en_attente',
            'items' => $items
        ]);

        // Clear the cart after successful order
        session()->forget('panier');

        return response()->json([
            'success' => true,
            'message' => 'Votre commande a été passée avec succès !',
            'commande_id' => $commande->id,
            'total' => number_format($totalPrix, 2) . ' MAD',
            'redirect' => route('index') . '?order_success=1'
        ]);
    }

}
