<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function branches() : BelongsToMany
{
    return $this->belongsToMany(Branch::class, 'product_branch')->withPivot('quantity');
}

}
