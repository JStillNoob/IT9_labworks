<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    public function submit(Request $request)
    {
    
        $validatedData = $request->validate([
            'newusername' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'newpassword' => 'required|min:6',
        ]);

     
        \Log::info('Validated Data:', $validatedData);

        try {
            
            $user = User::create([
                'name' => $validatedData['newusername'],
                'email' => $validatedData['email'],
                'password' => bcrypt($validatedData['newpassword']),
            ]);

           
            \Log::info('Created User:', $user->toArray());

            
            return redirect()->route('homepage')->with([
                'success' => 'Registration successful!',
                'username' => $user->name,
                'email' => $user->email,
            ]);
        } catch (\Exception $e) {
            
            \Log::error('Error during registration:', ['error' => $e->getMessage()]);

            
            return redirect()->back()->withErrors(['error' => 'Registration failed. Please try again.']);
        }
    }
}
