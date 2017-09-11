<?php
$filename = "P:\\Plan_Zak_Log\\Planowanie\\SERWIS\\dane na spotkanie.xlsx";
$sheet1 = "Arkusz3";
$excel_app = new COM("Excel.application") or Die ("Did not connect");
$Workbook = $excel_app->Workbooks->Open("$filename") or Die("Did not open $filename $Workbook");
$Worksheet = $Workbook->Worksheets($sheet1);

$Worksheet->activate;
$excel_cell = $Worksheet->Range("B14");
$excel_cell->activate;
$excel_result9 = $excel_cell->value;
//print "$excel_result7\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("C14");
$excel_cell->activate;
$excel_result7 = $excel_cell->value;
//print "$excel_result8\n";
$excel_cell = $Worksheet->Range("D14");
$excel_cell->activate;
$excel_result8 = $excel_cell->value;
//print "$excel_result8\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("B15");
$excel_cell->activate;
$excel_result12 = $excel_cell->value;
//print "$excel_result7\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("C15");
$excel_cell->activate;
$excel_result10 = $excel_cell->value;
//print "$excel_result8\n";
$excel_cell = $Worksheet->Range("D15");
$excel_cell->activate;
$excel_result11 = $excel_cell->value;
//print "$excel_result8\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("B16");
$excel_cell->activate;
$excel_result15 = $excel_cell->value;
//print "$excel_result7\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("C16");
$excel_cell->activate;
$excel_result13 = $excel_cell->value;
//print "$excel_result8\n";
$excel_cell = $Worksheet->Range("D16");
$excel_cell->activate;
$excel_result14 = $excel_cell->value;
//print "$excel_result8\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("B17");
$excel_cell->activate;
$excel_result18 = $excel_cell->value;
//print "$excel_result7\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("C17");
$excel_cell->activate;
$excel_result16 = $excel_cell->value;
//print "$excel_result8\n";
$excel_cell = $Worksheet->Range("D17");
$excel_cell->activate;
$excel_result17 = $excel_cell->value;
//print "$excel_result8\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("B18");
$excel_cell->activate;
$excel_result21 = $excel_cell->value;
//print "$excel_result7\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("C18");
$excel_cell->activate;
$excel_result19 = $excel_cell->value;
//print "$excel_result8\n";
$excel_cell = $Worksheet->Range("D18");
$excel_cell->activate;
$excel_result20 = $excel_cell->value;
//print "$excel_result8\n";

$dataPo = array(
    array("y" => $excel_result7*100, "label" => "Wczoraj"),
    array("y" => $excel_result8*100, "label" => "Dzisiaj"),
    array("y" => $excel_result9*100, "label" => "Cel"),
);
$dataPoi = array(
    array("y" => $excel_result10, "label" => "Wczoraj"),
    array("y" => $excel_result11, "label" => "Dzisiaj"),
    array("y" => $excel_result12, "label" => "Cel"),
);
$dataPoin = array(
    array("y" => $excel_result13, "label" => "Wczoraj"),
    array("y" => $excel_result14, "label" => "Dzisiaj"),
    array("y" => $excel_result15, "label" => "Cel"),
);
$dataPoint = array(
    array("y" => $excel_result16, "label" => "Wczoraj"),
    array("y" => $excel_result17, "label" => "Dzisiaj"),
    array("y" => $excel_result18, "label" => "Cel"),
);
$dataPointt = array(
    array("y" => $excel_result19, "label" => "Wczoraj"),
    array("y" => $excel_result20, "label" => "Dzisiaj"),
    array("y" => $excel_result21, "label" => "Cel"),
);

#To close all instances of excel:
$Workbook->Close;
unset($Worksheet);
unset($Workbook);
$excel_app->Workbooks->Close();
$excel_app->Quit();
unset($excel_app);