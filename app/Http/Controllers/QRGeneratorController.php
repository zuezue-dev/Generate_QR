<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRGeneratorController extends Controller
{
    public function generateQr(Request $request)
    {
        if($request->url_or_text == null) { return false; }
        
        $url_or_text = $request->url_or_text;

        \QrCode::size(500)
            ->format('png')
            ->generate($url_or_text, public_path('images/qrcode.png'));

        \QrCode::size(500)
        ->format('svg')
        ->generate($url_or_text, public_path('images/qrcode.svg')); 

        return view('qrCode', compact('url_or_text'));
    }
}
