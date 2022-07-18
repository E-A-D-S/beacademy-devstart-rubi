<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{
    User
};

class AccountController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('auth.dashboard', compact('users'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('users.login')->with('danger', 'Sessao encerrada com sucesso.');;
    }
}