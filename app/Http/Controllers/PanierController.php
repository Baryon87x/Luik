<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PanierController extends Controller
{
    //
    public function index()
    {
        $resultat = article::with('categories','imageArticle')->take(2)->get();
        $page_data = [];
        foreach($resultat as $key => $data) {
            array_push($page_data,[
                    'nom' => $data->libelle,
                    'description' => $data->description,
                    'quantite' => $data->quantite,
                    'prix' => $data->prix,
                    'rang' => $data->rang,
                    'categorie' => $data->categories->titre,
                    'image' => $data->imageArticle,
            ]);
        }
        return Inertia::render('Panier/Home',compact('page_data'));
    }
}
