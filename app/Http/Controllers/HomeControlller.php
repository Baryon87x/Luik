<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class HomeControlller extends Controller
{
    //
    public function index(): InertiaResponse{
        return Inertia::render('Home/Home');
    }
}
