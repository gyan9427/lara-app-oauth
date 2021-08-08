<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Datafetch extends Controller
{
    public function saveApiData()
    {
        $client = new Client();
        $res = $client->request('GET', 'https://api.instagram.com/oauth/authorize', [
            'form_params' => [
                'client_id' => '862746144637944',
                'redirect_uri' => 'https://google.com',
                'scope' => 'user_profile,user_media',
                'response_type' => 'code',
            ]
        ]);

        dd($res);
    }
}
