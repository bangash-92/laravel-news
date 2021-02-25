<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['user_id', 'title', 'body', 'image'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function category()
    {
        return $this->belongsTo('App\NewsCategory')->select(['id', 'name']);
    }
    public function website()
    {
        return $this->belongsTo('App\NewsWebsite')->select(['id', 'website']);
    }
    
}
