<?php
include "PHPExcel-1.8\Classes\PHPExcel\IOFactory.php";
// include "PhpSpreadsheet\src\PhpSpreadsheet\IOFactory.php";

// $inputFileName = 'C:\Users\tfd054it0154\Desktop\dane na spotkanie.xlsx';
$inputFileName = 'P:\Plan_Zak_Log\Planowanie\SERWIS\dane na spotkanie.xlsx';
// $inputFileName = 'C:\Users\tfd054it0154\Desktop\test2.xlsx';
// $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileName);

//  Read your Excel workbook
try {
    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
    $objPHPExcel = $objReader->load($inputFileName);
} catch(Exception $e) {
    die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
}

require_once "PHPExcel-1.8/Classes/PHPExcel.php";

// $fileLocation = "C:/Users/tfd054it0154/Desktop/" . $fileName;
// $objReader = PHPExcel_IOFactory::createReaderForFile($fileName); 
// if( !file_exists( $fileLocation ) ) die( 'File could not be found at: ' . $fileLocation );
// $data = new Spreadsheet_Excel_Reader( $fileLocation, false ); 


// $tmpfname = "dane na spotkanie.xlsx";
// echo getcwd() . "\n";
// if (is_readable($tmpfname)) {
//     echo 'The file is readable';
// } else {
//     echo 'The file is not readable';
// }
// $excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
// $excelObj = $excelReader->load($tmpfname);
// $worksheet = $excelObj->getSheet(0);
// ---------------------------------------------------------------------------------
$excel_result9 = $objPHPExcel->getActiveSheet()->getCell('E14')->getValue();
// echo $excel_result9;
// echo " ";
$excel_result7 = $objPHPExcel->getActiveSheet()->getCell('F14')->getOldCalculatedValue();
// echo $excel_result7;    
// echo " ";
$excel_result8 = $objPHPExcel->getActiveSheet()->getCell('G14')->getOldCalculatedValue();
// echo $excel_result8;    
// echo " ";
$excel_result12 = $objPHPExcel->getActiveSheet()->getCell('E15')->getValue();
// echo $excel_result12;    
// echo " ";
$excel_result10 = $objPHPExcel->getActiveSheet()->getCell('F15')->getOldCalculatedValue();
// echo $excel_result10;    
// echo " ";
$excel_result11 = $objPHPExcel->getActiveSheet()->getCell('G15')->getOldCalculatedValue();
// echo $excel_result11;    
// echo " ";
$excel_result15 = $objPHPExcel->getActiveSheet()->getCell('E16')->getValue();
// echo $excel_result15;    
// echo " ";
$excel_result13 = $objPHPExcel->getActiveSheet()->getCell('F16')->getOldCalculatedValue();
// echo $excel_result13;    
// echo " ";
$excel_result14 = $objPHPExcel->getActiveSheet()->getCell('G16')->getOldCalculatedValue();
// echo $excel_result14;    
// echo " ";
$excel_result18 = $objPHPExcel->getActiveSheet()->getCell('E17')->getValue();
// echo $excel_result18;    
// echo " ";
$excel_result16 = $objPHPExcel->getActiveSheet()->getCell('F17')->getOldCalculatedValue();
// echo $excel_result16;    
// echo " ";
$excel_result17 = $objPHPExcel->getActiveSheet()->getCell('G17')->getOldCalculatedValue();
// echo $excel_result17;    
// echo " ";
$excel_result21 = $objPHPExcel->getActiveSheet()->getCell('E18')->getValue();
// echo $excel_result21;    
// echo " ";
$excel_result19 = $objPHPExcel->getActiveSheet()->getCell('F18')->getOldCalculatedValue();
// echo $excel_result19;    
// echo " ";
$excel_result20 = $objPHPExcel->getActiveSheet()->getCell('G18')->getOldCalculatedValue();
// echo $excel_result20;    

if ($excel_result7 >= $excel_result9) {
    $color = "green";
} else {
    $color = "red";
}

if ($excel_result8 >= $excel_result9) {
    $color1 = "green";
} else {
    $color1 = "red";
}

if ($excel_result10 <= $excel_result12) {
    $color2 = "green";
} else {
    $color2 = "red";
}
if ($excel_result11 <= $excel_result12) {
    $color3 = "green";
} else {
    $color3 = "red";
}

if ($excel_result13 <= $excel_result15) {
    $color4 = "green";
} else {
    $color4 = "red";
}

if ($excel_result14 <= $excel_result15) {
    $color5 = "green";
} else {
    $color5 = "red";
}

if ($excel_result16 <= $excel_result18) {
    $color6 = "green";
} else {
    $color6 = "red";
}

if ($excel_result17 <= $excel_result18) {
    $color7 = "green";
} else {
    $color7 = "red";
}

if ($excel_result19 <= $excel_result21) {
    $color8 = "green";
} else {
    $color8 = "red";
}

if ($excel_result20 <= $excel_result21) {
    $color9 = "green";
} else {
    $color9 = "red";
}


$dataPo = array(
    array("y" => round($excel_result7,4)*100,"color" => $color, "label" => "Wczoraj"),
    array("y" => round($excel_result8,4)*100,"color" => $color1, "label" => "Dzisiaj"),
);
$dataPoi = array(
    array("y" => $excel_result10,"color" => $color2, "label" => "Wczoraj"),
    array("y" => $excel_result11,"color" => $color3, "label" => "Dzisiaj"),
);
$dataPoin = array(
    array("y" => $excel_result13,"color" => $color4, "label" => "Wczoraj"),
    array("y" => $excel_result14,"color" => $color5, "label" => "Dzisiaj"),
);
$dataPoint = array(
    array("y" => $excel_result16,"color" => $color6, "label" => "Wczoraj"),
    array("y" => $excel_result17,"color" => $color7, "label" => "Dzisiaj"),
);
$dataPointt = array(
    array("y" => $excel_result19,"color" => $color8, "label" => "Wczoraj"),
    array("y" => $excel_result20,"color" => $color9, "label" => "Dzisiaj"),
);

$strzalka = "⬆";
$strzalka_dol = "⬇";
unset($objPHPExcel);
unset($objReader);