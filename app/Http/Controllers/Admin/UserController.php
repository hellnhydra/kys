<?php



namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
  
    public function index()
    {
        $users = User::all(); 
        return view('admin.users.index', compact('users')); // Return the index view with users
    }

    
    public function create()
    {
        return view('admin.users.form'); 
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), 
        ]);

        return redirect()->route('admin.users.index')->with('success', 'User  created successfully.');
    }

    
    public function edit($id)
    {
        $user = User::findOrFail($id); 
        return view('admin.users.edit', compact('user')); 
    }

    
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user->name = $request->name;
        $user->email = $request->email;

        
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save(); 

        return redirect()->route('admin.users.index')->with('success', 'User  updated successfully.');
    }

    
    public function destroy(User $user)
    {
        $user->delete(); 
        return redirect()->route('admin.users.index')->with('success', 'User  deleted successfully.');
    }
}
