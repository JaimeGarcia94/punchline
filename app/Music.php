<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model
{
    protected $table = 'music';

    protected $fillable = [
        'music_path'
    ];

    //relacion de muchos a uno
    public function game()
    {
        return $this->belongsTo('App\Game', 'music_id');
    }
}
