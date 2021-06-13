<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesionController extends Controller
{
    public function create()
    {
    	return view('sesion.create');
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {

            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/games');
    }
    
    public function destroy()
    {
        auth()->logout();
        return redirect()->to('/login');
    }
}