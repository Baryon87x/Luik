<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class BoutiqueController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Boutique/Home');
    }
}
