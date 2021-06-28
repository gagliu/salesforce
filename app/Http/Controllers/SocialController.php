<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Validator;
use Socialite;
use Exception;
use Auth;

class SocialController extends Controller
{
    /* 
    * Redirect to SalesForce to process login
    */
    public function salesforceRedirect()
    {
        return Socialite::driver('salesforce')->redirect();
    }

    /* 
    * Complete login with SalesForce login result
    */
    public function loginWithSalesForce()
    {
        try {
            //Get logged user from SalesForce
            $user = Socialite::driver('salesforce')->user();
            $isUser = User::where('sf_id', $user->id)->first();
            
            //If user is already created on database, just login
            if($isUser){
                Auth::login($isUser);
                return redirect('/dashboard');
            } else {
                //User is new. Store it in database
                $createUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'sf_id' => $user->id,
                    'password' => encrypt('admin@123')
                ]);
    
                Auth::login($createUser);
                return redirect('/dashboard');
            }
    
        } catch (Exception $exception) {
            report($exception->getMessage());
            
            return back()->withInput($exception->getMessage());
        }
    }
}
