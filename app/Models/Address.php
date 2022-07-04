<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'postal_code',
        'address',
        'city',
        'country',
        'created_at',
        'updated_at'
    ];
}
