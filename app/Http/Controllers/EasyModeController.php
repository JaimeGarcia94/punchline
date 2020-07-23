<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class EasyModeController extends Controller
{
    public function index()
    {
        $this->getWords();
        return view('easymode.content');

    }

    public function getWords()
    {
        $logs = Word::all();

        return $logs;
    }

}
