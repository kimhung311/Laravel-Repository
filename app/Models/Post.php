<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $post;
    protected $fillable = [
        'title',
        'description',
    ];

    protected $hide = [
        'create_at',
        'update_at',
    ];
}
