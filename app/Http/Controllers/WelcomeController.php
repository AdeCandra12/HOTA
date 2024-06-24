<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Hotels;

class WelcomeController extends Controller
{
    /**
     * Show the application welcome screen.
     * 
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('welcome', [
            'hotels' => Hotels::all()
        ]);
    }
}
