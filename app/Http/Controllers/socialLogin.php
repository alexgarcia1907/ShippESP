<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class socialLogin extends Controller
{

    /**
     * Funciones para el OAuth de Google.
     *
     * @return void
     */
    public function redirectGoogle(){
        return Socialite::driver('google')->redirect();
    }
  
    public function CallbackGoogle(){
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $finduser = User::where('email', $user->email)->first(); 

            if($finduser){
                Auth::login($finduser);
                return redirect('/ofertas/disponibles');

            }else{
                
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => Hash::make('1234'),
                    'role_id' => 2,
                ]);
      
                Auth::login($newUser);
                return redirect('/ofertas/disponibles');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
