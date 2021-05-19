<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class socialLogin extends Controller
{
    public function redirectGoogle(){
        return Socialite::driver('google')->redirect();
    }
  
    public function CallbackGoogle(){
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $finduser = User::where('email', $user->email)->first(); 

            if($finduser){
                Auth::login($finduser);
                return redirect('/');

            }else{
                
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'password' => null
                ]);
                $newProvider = Provider::create([
                    'provider_name' => 'google',
                    'provider_token' => $user->token,
                    'user_id'=> $newUser->id
                ]);
      
                Auth::login($newUser);
                return redirect('/');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
