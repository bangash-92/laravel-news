<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsWebsite extends Model
{
    public function news()
    {
        return $this->hasMany('App\Post');
    }
}
