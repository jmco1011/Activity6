<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
class ReportsController extends Controller
{
    public function word()
    {		
    	//import library
    	//get templates
    	//change value in the template
    	//save file
    	//let user dl file
    	$templateProcessor = new TemplateProcessor('./templates/Certificate of Recognition.docx');

    	$templateProcessor->setValue('first_name','Jco');
    	$templateProcessor->setValue('last_name','Michael');
    	$templateProcessor->saveAs('Jco Certificate.docx');

    	return response()->download('Jco Certificate.docx');
    }
}
