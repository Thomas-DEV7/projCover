<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
class PdfController extends Controller
{
    
    public function createPdf(Request $request){
        $dompdf = new Dompdf();
        $dompdf->loadHtml
        ('
            <h1>Titulo do PDF</h1>
            <p>Segunda linha</p>
            <hr>
            <p>Informações estáticas</p>
        ');
        $dompdf->set_option('isHtml5ParserEnabled', true);
        $dompdf->set_option('isRemoteEnabled', true);
        $dompdf->set_option('isPhpEnabled', true);
                           
        $dompdf->render();
                           
        return $dompdf->stream('/model');
        
    }
}
