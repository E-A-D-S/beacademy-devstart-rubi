<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'quantity',
        'price',
        'order_id',
        'product_id',
        'created_at',
        'updated_at',
        'user_id',
    ];

    public function order()
    {
        return $this->hasOne(Order::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
