<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferencesController extends Controller 
{
    public function index()
    {
        $conferences = Conference::all(); 
    
        return view('client.index', compact('conferences'));
    }

    public function register(Request $request, $id)
    {
        

        return redirect()->back()->with('success', 'You have registered successfully!');
    }
}