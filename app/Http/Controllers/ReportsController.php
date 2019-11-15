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


    public function excel()
    {
    //import librart
   	//get templates
    //fill in the templates
    //save
    //dl file
    	$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load('./templates/form138.xlsx');

$worksheet = $spreadsheet->getActiveSheet();

$worksheet->getCell('A7')->setValue('Name:John Cena');
$worksheet->getCell('A8')->setValue('11-B');

$writer = \PhpOffice\PhpSpreadsheet\IOFactory::createWriter($spreadsheet, 'Xls');
$writer->save('form138.xls');
return response()->download('form138.xls');
    }
}
