<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{ 
    protected $fillable = [
        'like',
        'post_id',
        'user_id'
    ];
    use HasFactory;
}
