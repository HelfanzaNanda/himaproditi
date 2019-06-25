<?php

namespace App\Http\Controllers\AuthAnggota;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:anggota')->except('logout');
    }

    public function showLoginForm(){
        return view('authAnggota.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string|min:6'
        ]);

        $credential = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::guard('anggota')->attempt($credential, $request->remember)){
            return redirect()->intended(route('user.home'));
        }

        return redirect()->back()->withInput($request->only('username', 'remember'));
    }

    public function logout()
    {
        Auth::guard('anggota')->logout();
        return redirect('/');
    }
}
