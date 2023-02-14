<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $product;
    protected $fillable = [
        'name',
        'description',
    ];
    protected $hide = [
        'create_at',
        'update_at',
    ];
}
