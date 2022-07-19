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
        'category_id',
        'quantity',
        'cost_price',
        'sale_price',
        'image',
        'created_at',
        'updated_at',
    ];
    public function categories()
    {
        return $this->hasOne(Category::class);
    }
}
