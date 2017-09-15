<?php
$filename = "P:\\Plan_Zak_Log\\Planowanie\\SERWIS\\dane na spotkanie.xlsx";
$sheet1 = "Arkusz3";
$excel_app = new COM("Excel.application") or Die ("Did not connect");
$Workbook = $excel_app->Workbooks->Open("$filename") or Die("Did not open $filename $Workbook");
$Worksheet = $Workbook->Worksheets($sheet1);

$Worksheet->activate;
$excel_cell = $Worksheet->Range("B6"); //cel lisc vs1
$excel_cell->activate;
$excel_result9 = $excel_cell->value;
//print "$excel_result7\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("C6");
$excel_cell->activate;
$excel_result7 = $excel_cell->value;
//print "$excel_result8\n";
$excel_cell = $Worksheet->Range("D6");
$excel_cell->activate;
$excel_result8 = $excel_cell->value;
//print "$excel_result8\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("B7"); //cel misser vs1
$excel_cell->activate;
$excel_result12 = $excel_cell->value;
//print "$excel_result7\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("C7");
$excel_cell->activate;
$excel_result10 = $excel_cell->value;
//print "$excel_result8\n";
$excel_cell = $Worksheet->Range("D7");
$excel_cell->activate;
$excel_result11 = $excel_cell->value;
//print "$excel_result8\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("B8"); //cel najst zam vs1
$excel_cell->activate;
$excel_result15 = $excel_cell->value;
//print "$excel_result7\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("C8");
$excel_cell->activate;
$excel_result13 = $excel_cell->value;
//print "$excel_result8\n";
$excel_cell = $Worksheet->Range("D8");
$excel_cell->activate;
$excel_result14 = $excel_cell->value;
//print "$excel_result8\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("B9"); //cel lb vs1
$excel_cell->activate;
$excel_result18 = $excel_cell->value;
//print "$excel_result7\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("C9");
$excel_cell->activate;
$excel_result16 = $excel_cell->value;
//print "$excel_result8\n";
$excel_cell = $Worksheet->Range("D9");
$excel_cell->activate;
$excel_result17 = $excel_cell->value;
//print "$excel_result8\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("B10"); //cel opozn lin vs1
$excel_cell->activate;
$excel_result21 = $excel_cell->value;
//print "$excel_result7\n";
$Worksheet->activate;
$excel_cell = $Worksheet->Range("C10");
$excel_cell->activate;
$excel_result19 = $excel_cell->value;
//print "$excel_result8\n";
$excel_cell = $Worksheet->Range("D10");
$excel_cell->activate;
$excel_result20 = $excel_cell->value;
//print "$excel_result8\n";

if ($excel_result7 > $excel_result9) {
    $color = "green";
} else {
    $color = "red";
}

if ($excel_result8 > $excel_result9) {
    $color1 = "green";
} else {
    $color1 = "red";
}

if ($excel_result10 < $excel_result12) {
    $color2 = "green";
} else {
    $color2 = "red";
}
if ($excel_result11 < $excel_result12) {
    $color3 = "green";
} else {
    $color3 = "red";
}

if ($excel_result13 < $excel_result15) {
    $color4 = "green";
} else {
    $color4 = "red";
}

if ($excel_result14 < $excel_result15) {
    $color5 = "green";
} else {
    $color5 = "red";
}

if ($excel_result16 < $excel_result18) {
    $color6 = "green";
} else {
    $color6 = "red";
}

if ($excel_result17 < $excel_result18) {
    $color7 = "green";
} else {
    $color7 = "red";
}

if ($excel_result19 < $excel_result21) {
    $color8 = "green";
} else {
    $color8 = "red";
}

if ($excel_result20 < $excel_result21) {
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

#To close all instances of excel:
//$Workbook->Close;
unset($Worksheet);
unset($Workbook);
//$excel_app->Workbooks->Close();
//$excel_app->Quit();
unset($excel_app);