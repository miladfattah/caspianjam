<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'name',
        'price',
        'description',
        'weight', 
        'flavor',
        'brand'
        
    ];



    public function images()
    {
        return $this->hasMany(image::class);
    }
}
