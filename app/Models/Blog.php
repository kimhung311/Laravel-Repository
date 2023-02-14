<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    use HasFactory;
    protected $post;
    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    protected $hide = [
        'create_at',
        'update_at',
    ];
}
