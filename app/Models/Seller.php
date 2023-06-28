<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Seller extends User
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
