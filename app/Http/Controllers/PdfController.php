<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use FontLib\Table\Type\post;

class PdfController extends Controller
{
    
    public function createPdf(Request $request){
        $dompdf = new Dompdf();

        $data=$request->input('data');
        $peticionario=$request->input('peticionario');
        $natureza=$request->input('natureza');
        $saudacao=$request->input('saudacao');
        $linha1=$request->input('linha1');
        $linha2=$request->input('linha2');
        $linha3=$request->input('linha3');
        $linha4=$request->input('linha4');
        $linha5=$request->input('linha5');
        $dompdf->loadHtml
        ('
            <style>
                p{
                    font-size:15px;
                    margin-left: 20px
                }
                p.paragrafo{
                    font-size:15px;
                    text-indent: 40px
                }   
            </style>
            
            <h1>Titulo do PDF</h1>
            <p>Segunda linha</p>
            <hr>'.
            '<p>'.
            'Data:'.$data.'<br><br>'.
            'Peticionário: '.$peticionario.'<br><br>'.
            'Natureza:'.$natureza.'<br><br>'.
            '</p><br><br>'.'<p>'.
            $saudacao.'</p>'.
            '<br><br>'.
            '<p class"paragrafo">'.$linha1.'<br><br>'
            .$linha2.'<br><br>'
            .$linha3.'<br><br>'
            .$linha4.'<br><br>'
            .$linha5. '</p><br><br>'.
            '<p>Informações estáticas</p>
        ');
        $dompdf->set_option('isHtml5ParserEnabled', true);
        $dompdf->set_option('isRemoteEnabled', true);
        $dompdf->set_option('isPhpEnabled', true);
                           
        $dompdf->render();
                           
        return $dompdf->stream('/model');
        
        // <img src="https://meueb2niw.com.br/wp-content/uploads/2022/12/Design_sem_nome-removebg-preview.png">
        //Deu erro quando tentei integrar ao PDF.
    }
}
