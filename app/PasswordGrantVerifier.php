<?php
namespace App;

use Illuminate\Support\Facades\Auth;
use Adldap;

class PasswordGrantVerifier
{
    public function verify($username, $password)
    {
        $credentials = [
            'email_id' => $username
        ];
        
       
            
        if (Auth::once($credentials)) {
            $user = Auth::user();
            //var_dump($user);exit;
            //return Auth::user()->id;
            return Auth::user()->employee_id;
        }

        return false;
    }
}