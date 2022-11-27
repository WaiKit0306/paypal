<?php

namespace App\Http\Controllers;


use \PDF;
class PDFController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function preview()
    {
        return view('preview');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function generatePDF()
    {
        $pdf = PDF::loadView('preview');    
        return $pdf->download('demo.pdf');
    }
}