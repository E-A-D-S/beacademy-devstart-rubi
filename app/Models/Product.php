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
        'quantity',
        'cost_price',
        'sale_price',
        'image',
        'category_id',
        'created_at',
        'updated_at',
    ];

    public function getProducts()
    {
        
    }

}
