<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['thread_id', 'body'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
