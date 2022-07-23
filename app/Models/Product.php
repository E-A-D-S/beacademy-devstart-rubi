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
        'is_active',
        'created_at',
        'updated_at',
    ];

    public function categories()
    {
        return $this->hasOne(Category::class);
    }

    public function getUsers(string $search = null)
    {
        $users = $this->where(function ($query) use ($search)
        {
            if($search){
                $query->where('email', $search);
                $query->orWhere('name', 'LIKE', "%{$search}%");
            }
        })->paginate(5);

        return $users;
    }

    public function getProducts()
    {
        
    }

}
