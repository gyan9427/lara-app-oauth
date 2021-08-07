<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class Datafetch extends Controller
{
    public function saveApiData()
    {
        $client = new Client();
        $res = $client->request('POST', 'https://genderapi.io/api/', [
            'form_params' => [
                'name' => 'gyan',
            ]
        ]);

        dd($res);
    }
}
