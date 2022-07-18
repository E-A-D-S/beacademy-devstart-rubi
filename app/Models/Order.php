<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'category',
        'quantity',
        'cost_price',
        'sale_price',
        'image',
        'created_at',
        'updated_at',
        'user_id',
    ];
}
