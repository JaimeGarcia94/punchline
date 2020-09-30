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
        $url = "https://picsum.photos/v2/list?page=2&limit=100";
        $json = file_get_contents($url);
        $arraydata = json_decode($json);

        foreach ($arraydata as $data){
            $array_data[] = $data->download_url;
        }

        return $array_data;
    }
}
