<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class notificacionesDP extends Controller
{
    public function enviarMSJ(Request $request)
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('6a593426', 'XjIM27tVieG7ruxO');
        $client = new \Nexmo\Client($basic);

        $message = $client->message()->send([
            'to' => '593986234897',
            'from' => 'Nexmo',
            'text' => $categoria = $request->input('mensaje')
        ]);
    }
}
