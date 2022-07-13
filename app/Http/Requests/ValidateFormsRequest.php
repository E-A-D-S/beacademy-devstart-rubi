<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateFormsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:50|min:3',
            'email' => 'required|email|unique:users,email,{$id},id',
            'password' => 'required|min:6|max:12',
            'image' => 'mimes:jpeg,png,jpg',
            // 'cpf' => '',
            // 'birthday' => '',
            // 'phone' => '',
            // 'city' => '',
            // 'state' => '',
            // 'category' => '',
            // 'quantity' => '',
            // 'cost' => '',
            // 'sale' => '',
        ];
    }
}
