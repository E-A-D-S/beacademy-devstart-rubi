<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'description',
        'category',
        'quantity',
        'cost_price',
        'sale_price',
        'image',
        'created_at',
        'updated_at',
    ];
}
