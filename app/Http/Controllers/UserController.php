<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{
    User,
    Address,
    Phone
};
use \App\Http\Requests\ValidateFormsRequest;

class UserController extends Controller
{
    protected $user;
    protected $address;
    protected $phone;

    public function __construct(User $user, Address $address, Phone $phone)
    {
        $this->model = $user;
        $this->model = $address;
        $this->model = $phone;
    }

    public function login()
    {
        if(Auth::check()){
            return redirect()->route('account.index');
        }else{
            return view("users.login");
        }
    }

    public function create()
    {
        return view("users.register");
    }

    public function recovery()
    {
        return view("users.recovery");
    }

    public function store(ValidateFormsRequest $request)
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

        return view('users.register', compact('message'));
    }

    public function auth(Request $request)
    {

            $this->validate($request, [
                'email' =>  'required',
                'password' => 'required'
            ]);

                if(auth::attempt(['email' => $request->email, 'password' => $request->password]))
                {
                    return redirect()->route('account.index');
                }

                return redirect()->back()->with('danger', 'Email ou senha invalido!');
    }
}