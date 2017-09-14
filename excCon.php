<?php
$filename = "C:\\Users\\tfd054it0154\\Desktop\\KPI_webApp\\data\\Output.xlsb";
$sheet1 = "DAILY_OUTPUT";
//$sheet2 = "Arkusz1";
$excel_app = new COM("Excel.application") or Die ("Did not connect");
$Workbook = $excel_app->Workbooks->Open("$filename") or Die("Did not open $filename $Workbook");
$Worksheet = $Workbook->Worksheets($sheet1);

$Worksheet->activate;
$excel_cell = $Worksheet->Range("AN15");
$excel_cell->activate;
$excel_result = $excel_cell->value;
//print "$excel_result\n";
$excel_cell = $Worksheet->Range("AN16");
$excel_cell->activate;
$excel_result2 = $excel_cell->value;
//print "$excel_result2\n";
//pie chart
$excel_cell = $Worksheet->Range("AN15");
$excel_cell->activate;
$excel_result3 = $excel_cell->value;
//print "$excel_result3\n";
$excel_cell = $Worksheet->Range("AN41");
$excel_cell->activate;
$excel_result4 = $excel_cell->value;
//print "$excel_result4\n";
$excel_cell = $Worksheet->Range("AN81");
$excel_cell->activate;
$excel_result5 = $excel_cell->value;
//print "$excel_result5\n";
$excel_cell = $Worksheet->Range("AN102");
$excel_cell->activate;
$excel_result6 = $excel_cell->value;

$dataPoints = array(
    array("y" => $excel_result, "label" => "Ilość wyprodukowana"),
    array("y" => $excel_result2, "label" => "Dzienny plan produkcji"),
);

$dataP = array(
    array("y" => $excel_result3, "name" => "VS1", "exploded" => false),
    array("y" => $excel_result4, "name" => "VS2"),
    array("y" => $excel_result5, "name" => "VS3&5"),
    array("y" => $excel_result6, "name" => "VS4"),
);
//print "$excel_result6\n";
//print "$excel_result2";
//$Worksheet = $Workbook->Worksheets($sheet2);
//$Worksheet->activate;
//$excel_cell = $Worksheet->Range("B1");
//$excel_cell->activate;
//$excel_result = $excel_cell->value;
//print "$excel_result\n";

#To close all instances of excel:
//$Workbook->Close;
unset($Worksheet);
unset($Workbook);
//$excel_app->Workbooks->Close();
//$excel_app->Quit();
unset($excel_app);

//problem bad gateway 502
//ogarnac xamppa/wampa (usunac albo cos)
//aktualiazacja php
//jak odnosniki do strony zamiast miliona plikow