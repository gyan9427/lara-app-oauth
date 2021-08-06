<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Datafetch extends Controller
{
    public function saveApiData()
    {
        $client = new Client();
        $res = $client->request('POST', 'https://graph.instagram.com/v/', [
            'form_params' => [
                 '780166575',
                 'media',
            ]
        ]);

        dd($res);
    }
}
