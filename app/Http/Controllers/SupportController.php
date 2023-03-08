<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class SupportController extends Controller
{
    public function index()
    {
        return Inertia::render('Support', []);
    }
    
}