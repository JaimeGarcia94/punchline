<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    protected $table = 'words';

    //relacion de muchos a uno
    public function game()
    {
        return $this->belongsTo('App\Game', 'game_id');
    }
}
