<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\{
    User,
    address,
    Phone
};

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
        return view("users.login");
    }

    public function create()
    {
        return view("users.create");
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

        return redirect()->route('users.login');
    }
}
