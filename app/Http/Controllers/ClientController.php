<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        
        $conferences = [
            ['id' => 1, 'name' => 'Tech Conference', 'date' => '2024-10-10', 'status' => 'upcoming'],
            ['id' => 2, 'name' => 'Business Summit', 'date' => '2024-11-15', 'status' => 'upcoming']
        ];

        return view('client.index', compact('conferences'));
    }

    public function show($id)
    {
        
        $conference = ['id' => $id, 'name' => 'Tech Conference', 'description' => 'Details about the conference...'];

        return view('client.show', compact('conference'));
    }

    public function register(Request $request)
    {
        
        return redirect()->back()->with('success', 'You have successfully registered for the conference.');
    }
}