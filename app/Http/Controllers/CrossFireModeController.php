<?php

namespace App\Http\Controllers;

use App\Music;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class CrossFireModeController extends Controller
{
    public function index()
    {
        return view('crossFireMode.content',[
            'beats' => $this->getAllMusic()
        ]);
    }


    public function getMusic($filename)
    {
        $file = Storage::disk('beats')->get($filename);

        return new Response($file,200);
    }

    public function getAllMusic()
    {
        $getAllBeats = Music::all('music_path');

        foreach ($getAllBeats as $getBeat){
            $array_beats[] = $getBeat->music_path;
        }

        return $array_beats;
    }
}
