<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EasyModeController extends Controller
{
    public function index()
    {
        return view('easymode.content');

    }
}
