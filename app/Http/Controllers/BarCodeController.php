<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Picqer\Barcode\BarcodeGeneratorPNG;
use Picqer\Barcode\BarcodeGeneratorHTML;

class BarCodeController extends Controller
{
    public function generate () {
        $generator=new BarcodeGeneratorHTML();
        $generatorPNG=new BarcodeGeneratorPNG();


         return view("welcome", compact('generator','generatorPNG'));
     }
}



