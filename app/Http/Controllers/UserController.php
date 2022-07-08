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
        $data   = $request->all();
        $data['password'] = password_hash($request->password, PASSWORD_ARGON2I);


        $this->model->create($data);

        return redirect()->route('users.login');
    }
}
