<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model

{

     protected $fillable = [
        'content'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favorited()
    {
        return $this->belongsToMany(User::class, 'user_favorite', 'favorite_id', 'user_id')->withTimestamps();
    }
    
}
