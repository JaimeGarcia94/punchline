<?php

namespace App\Http\Controllers;

use App\Music;
use App\Word;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class HistoryModeController extends Controller
{
    public function index()
    {
        return view('historyMode.content',[
            "histories" => $this->getHistory(),
            'beats' => $this->getAllMusic()
        ]);
    }

    public function getHistory()
    {
        $histories = Word::all('history');

        foreach ($histories as $history){
            $array_history[] = $history->history;
        }

        return $array_history;
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
