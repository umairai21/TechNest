<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;

    public function products()
    {
        return $this->belongsToMany(Food::class, 'product_branch', 'branch_id', 'product_id');
    }
}
