<?php
$filename = "C:\\Users\\tfd054it0154\\Desktop\\KPI_webApp\\data\\parsetest.xlsx";
$sheet1 = "Arkusz1";
$sheet2 = "Arkusz1";
$excel_app = new COM("Excel.application") or Die ("Did not connect");
$Workbook = $excel_app->Workbooks->Open("$filename") or Die("Did not open $filename $Workbook");
$Worksheet = $Workbook->Worksheets($sheet1);
$Worksheet->activate;
$excel_cell = $Worksheet->Range("A1");
$excel_cell->activate;
$excel_result = $excel_cell->value;
print "$excel_result\n";
$Worksheet = $Workbook->Worksheets($sheet2);
$Worksheet->activate;
$excel_cell = $Worksheet->Range("B1");
$excel_cell->activate;
$excel_result = $excel_cell->value;
print "$excel_result\n";
#To close all instances of excel:
$Workbook->Close;
unset($Worksheet);
unset($Workbook);
$excel_app->Workbooks->Close();
$excel_app->Quit();
unset($excel_app);