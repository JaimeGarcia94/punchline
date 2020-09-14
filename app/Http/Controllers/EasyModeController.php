<?php

namespace App\Http\Controllers;

use App\Music;
use App\Word;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class EasyModeController extends Controller
{
    public function index()
    {
        return view('easymode.content',[
            "words" => $this->getWords(),
            'beats' => $this->getAllMusic()
        ]);
    }

    public function getWords()
    {
        $words = Word::all('word');

        foreach ($words as $word){
            $array_word[] = $word->word;
        }

        return $array_word;
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
