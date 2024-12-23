<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_branches extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}
