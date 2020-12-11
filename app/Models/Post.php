<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'post',
        'user_id'
    ];
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
    use HasFactory;
}
