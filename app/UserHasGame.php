<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserHasGame extends Model
{
    protected $table = 'user_has_games';

    //relacion de muchos a uno
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    //relacion de muchos a uno
    public function game()
    {
        return $this->belongsTo('App\Game', 'game_id');
    }
}
