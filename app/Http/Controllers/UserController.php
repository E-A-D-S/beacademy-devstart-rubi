<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view("users.login");

    }
    public function create()
    {
        return view("users.create");
    }

    public function recovery()
    {
        return view("users.recovery");
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->password = password_hash($request->password, PASSWORD_ARGON2I);
        $user->cpf      = $request->cpf;
        $user->birthday = $request->birthday;
        $user->save();

        $phone = new Phone;
        $phone->phone   = $request->phone;
        $phone->user_id = $user->id;
        $phone->save();

        $address = new Address;
        $address->address   = $request->address;
        $address->city      = $request->city;
        $address->state     = $request->state;
        $address->user_id   = $user->id;
        $address->save();

        $message = "Cadastro realizado com sucesso!!!";

        return view('users.login', compact('message'));
    }
}
