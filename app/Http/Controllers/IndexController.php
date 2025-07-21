<?php

namespace App\Http\Controllers;

use App\Models\Packages;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $populairepack= Packages::where('id_categorie',3)->paginate(4);
        return view('home' , compact('populairepack'));
    }

    public function showMenu()
    {
        $products = Packages::all();
        return view('menu' , compact('products'));
    }

    public function showAbout()
    {
        return view('aboutpage');
    }

}
