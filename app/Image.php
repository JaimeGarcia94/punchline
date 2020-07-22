<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    //relacion de muchos a uno
    public function game()
    {
        return $this->belongsTo('App\Game', 'game_id');
    }
}
