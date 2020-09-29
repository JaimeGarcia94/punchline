<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index()
    {
        return view('imagesMode.content', [
            "images" => $this->getImage()
        ]);
    }

    public function getImage()
    {
        $urlImage = 'https://picsum.photos/200/300';

        return $urlImage;

    }
}
