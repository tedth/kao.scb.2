<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
class ShareController extends Controller
{
    public function image()
    {
        $width=1200;
        $height=628;
        $totalamount = (float) Redis::get('balance_display');
        $totalamount = number_format($totalamount,2);
        $bgimage = storage_path('app/share-b.jpg');
        $fontpath = storage_path('app/PSL096pro.ttf');
        $im  = imagecreatetruecolor($width, $height);
        $imbg = imagecreatefromjpeg($bgimage);
        imagecopyresampled($im, $imbg, 0, 0, 0, 0, $width, $height, $width, $height);

        //Text
        $fontsize = 80;
        $dimensions = imagettfbbox($fontsize, 0, $fontpath, $totalamount);
        $textWidth = abs($dimensions[4] - $dimensions[0]);
        $x = imagesx($im) - $textWidth;
        $fontcolor = imagecolorallocate($im, 25, 49, 83);

        imagettftext($im, $fontsize, 0, $x-540, 287, $fontcolor, $fontpath, $totalamount);
        header('Content-Type: image/jpeg');
        imagejpeg($im, null, 100);
        imagedestroy($im);
       //return response()->header('Content-Type', 'image/jpg');
    }
}
