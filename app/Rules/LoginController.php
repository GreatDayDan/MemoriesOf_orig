<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller{
    public function authenticate(Request $request){
        // Retrive Input
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if success login
            log::debug('gdd 301.1, 031.1 LoginController success.');

            return redirect('berhasil');

            //return redirect()->intended('/details');
        }
        // if failed login
        log::debug('gdd 301.2, 031.1 LoginController failed.');

        return redirect('login');
    }
}
