<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function generate()
    {
        PDF::SetTitle('Sample PDF');
        PDF::AddPage();
        PDF::SetMargins(0, 0, 0, true);
        PDF::ImageSVG($file = public_path('img/sample.svg'), $x = 125, $y = 200, $w = 80, $h = 75);
        PDF::AddPage();
        PDF::Image($file = public_path('img/transparant.png'), 72, 100, 80, '', 'PNG', null, 'center');
        PDF::Output(public_path('pdf/sample.pdf'), 'F');
        return response()->file(public_path('/pdf/sample.pdf'));
    }
}
