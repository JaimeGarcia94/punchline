<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';

    public function words()
    {
        return $this->hasMany('App\Word');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    }

    public function musics()
    {
        return $this->hasMany('App\Music');
    }

    public function userHasGames()
    {
        return $this->hasMany('App\UserHasGame');
    }
}
