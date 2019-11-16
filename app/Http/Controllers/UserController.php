<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Deleta um usuário
    public function destroy(\App\User $user){
        $user->delete();
        return redirect('dashboard');
    }
    
    // Atualiza um usuário
    public function update(\App\User $user, Request $request){        
        $user->name = $request->input('name');              
        $user->email = $request->input('email');              
        
        if ($request->hasFile('photo')) {
            $user->photo = Storage::put('photo', $request->file('photo'));            
        }
        
        $user->save();

        return redirect('user');
    }
}
