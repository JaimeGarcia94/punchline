<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class EasyModeController extends Controller
{
    public function index()
    {
        return view('easymode.content',[
            "words" => $this->getWords()
        ]);

    }

    public function getWords()
    {
        $words = Word::all('word');

        return $words;
    }

}
