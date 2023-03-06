<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $validateData = $this->validate($request, [
            'username' => 'required', 
            'password' => 'required'
        ]);

        if(Auth::guard('masyarakat')->attempt($validateData)){
            $request->session()->regenerate();
            return redirect('/');
        }
        if(Auth::guard('petugas')->attempt($validateData)){
            $request->session()->regenerate();
            return redirect('/');
        }
    }

    public function logout(){
        if(Auth::guard('masyarakat')->check()){
            Auth::guard('masyarakat')->logout();
            return redirect('login');
        }else{
            Auth::guard('petugas')->logout();
            return redirect('/login');
        }
    }
}
