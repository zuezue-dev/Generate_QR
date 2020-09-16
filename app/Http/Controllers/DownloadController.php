<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function getPngDownload()
    {
        $file= public_path(). "/images/qrcode.png";
        
        return response()->download($file, 'qrcode.png');
    }

    public function getSvgDownload()
    {
        $file= public_path(). "/images/qrcode.png";
        
        return response()->download($file, 'qrcode.svg');
    }
}
