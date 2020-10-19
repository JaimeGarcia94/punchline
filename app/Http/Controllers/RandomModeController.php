<?php

namespace App\Http\Controllers;

use App\Music;
use App\Word;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class RandomModeController extends Controller
{
    public function index()
    {
        return view('randomMode.content',[
            "words" => $this->getWords(),
            "images" => $this->getImage(),
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

    public function getImage()
    {
        $url = "https://picsum.photos/v2/list?page=2&limit=100";
        $json = file_get_contents($url);
        $arraydata = json_decode($json);

        foreach ($arraydata as $data){
            $array_data[] = $data->download_url;
        }

        return $array_data;
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
