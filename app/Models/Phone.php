<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'phone',
        'user_id',
        'created_at',
        'updated_at'
    ];
    
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
