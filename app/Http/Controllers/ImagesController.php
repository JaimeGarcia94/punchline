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
//        $urlImage = json_decode( file_get_contents('https://picsum.photos/200/300'), true);
//
//        dd($urlImage['author']);
//
//        return $urlImage;


        $curlHandler = curl_init('https://picsum.photos/v2/list');
        $response = curl_exec($curlHandler);
        var_dump(curl_getinfo($curlHandler));
        curl_close($curlHandler);

    }
}
