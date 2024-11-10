<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conference; 
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function index()
    {
        
        $conferences = Conference::all();

        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        return view('admin.conferences.form');
    }

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'date' => 'required|date',
    ]);

    Conference::create($request->all());

    return redirect()->route('admin.conferences.index')->with('success', 'Conference created successfully.');
}

public function edit($id) {
    $conference = Conference::findOrFail($id);
    return view('admin.conferences.form', compact('conference'));
}

public function update(Request $request, $id)
{
    $conference = Conference::findOrFail($id);

    $request->validate([
        'name' => 'required|string|max:255',
        'date' => 'required|date',
    ]);

    $conference->name = $request->input('name');
    $conference->date = $request->input('date');
    $conference->save();

    return redirect()->route('admin.conferences.index')->with('success', 'Conference updated successfully.');
}

public function destroy($id)
{
    
    $conference = Conference::findOrFail($id);
    $conference->delete();

   
    return redirect()->route('admin.conferences.index')->with('success', 'Conference deleted successfully.');
}
}
