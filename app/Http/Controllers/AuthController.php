<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\LoginRequest;

use Auth;

class AuthController extends Controller
{
    //

    public function login(){
    	return view('auth.login');
    }

    public function postLogin(LoginRequest $request){
        $credentials = [
            'codigo'    => $request->input('codigo'),
            'password'  => $request->input('password')
        ];

        if(Auth::attempt($credentials, 1)){
            return redirect()->route('index');
        }
        
        return redirect()->back()->withErrors(['Credenciales inválidas!']);
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
