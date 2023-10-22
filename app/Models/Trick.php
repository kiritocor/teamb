<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trick extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'body',
        'treat_like',
    ];
    
    public function post(){
        return $this->hasOne(Post::class);
    }
}
