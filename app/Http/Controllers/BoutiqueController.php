<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\categories;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Inertia\Inertia;

class BoutiqueController extends Controller
{
    //
    public function index()
    {
        $resultat = article::with('categories','imageArticle')->get();
        $categories = categories::select('titre','id')->get();
        $page_data = [];
        foreach($resultat as $key => $data) {
            array_push($page_data,[
                    'nom' => $data->libelle,
                    'description' => $data->description,
                    'quantite' => $data->quantite,
                    'prix' => $data->prix . ' FCFA',
                    'rang' => $data->rang,
                    'categorie' => $data->categories->titre,
                    'image' => $data->imageArticle,
            ]);
        }
        // $page_data = [
        //     'nom' => $resultat->libelle,
        //     'description' => $resultat->description,
        //     'quantite' => $resultat->quantite,
        //     'prix' => $resultat->prix . ' FCFA',
        //     'rang' => $resultat->rang,
        //     'categorie' => $resultat->categories->titre,
        //     'image' => $resultat->imageArticle,
        // ];
        // dd($page_data);
        return Inertia::render('Boutique/Home',compact('page_data','categories'));
    }


    public function search($id)
    {
        $categorie = categories::find((int) $id);
        $resultat = article::with('categories','imageArticle')
                    ->whereHas('categories',function($query) use ($categorie){
                        $query->where('titre',$categorie->titre);
                    })->get();
        $categories = categories::select('titre','id')->get();
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
        return Inertia::render('Boutique/Home',compact('page_data','categories'));
    }
}
