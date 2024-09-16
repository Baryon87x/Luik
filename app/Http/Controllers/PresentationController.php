<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PresentationController extends Controller
{
    //
    public function index()
    {
        return Inertia::render(component: 'Presentation/Home');
    }
}
