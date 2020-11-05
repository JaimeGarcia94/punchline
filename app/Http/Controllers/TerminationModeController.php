<?php

namespace App\Http\Controllers;

use App\Music;
use App\Word;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class TerminationModeController extends Controller
{
    public function index()
    {
        return view('terminationMode.content',[
            "terminations" => $this->getTerminations(),
            'beats' => $this->getAllMusic()
        ]);
    }

    public function getTerminations()
    {
        $terminations = Word::all('termination');

        foreach ($terminations as $termination){
            $array_termination[] = $termination->termination;
        }

        return $array_termination;
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
