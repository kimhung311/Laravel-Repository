<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $tag;
    protected $fillable = [
        'name',
    ];
    protected $hide = [
        'create_at',
        'update_at',
    ];
}
