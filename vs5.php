<!DOCTYPE html>
<?php require 'conv5.php';?>
<!--dane do wykresow moga byc w osobnych plikach albo tutaj-->
<!--ale trzeba uwazac na dataPoints w kategorii data-->

<!--DODAC OSOBNE PLIKI .PHP DO POBIERANIA DANYCH DLA WYKRESOW W ROZNYCH DZIALACH - OPTYMALIZACJA?-->

<!--NO PROMPT SOLVED WITH VBA MACRO DONE-->


<!--ZROBIC ODPALANIE AJAX-EM-->

<!--czarne to cele-->
<!--lisc dostawy na czas do klienta(zmienny) dazenie do 98%-->
<!--2 kolumna to wynik-->
<!---->
<!--misser dla czesci standardowych- im mniej tym lepiej (powyzej na czerwono/nizej na zielono)-->
<!---->
<!--najstarsze zamowienie <30-->
<!---->
<!--lb 0.5 dnia im mniej tym lepiej-->
<!---->
<!--opoznione linie 180-->

<html lang="pl">
<head>
    <title>KPI Townhall</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="img" href="favicon.ico"/>

    <script type="text/javascript" src="scripts.js"></script>
    <script type="text/javascript" src="charts.js"></script>
    <script type="text/javascript" src="init.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script src="RGraph/libraries/RGraph.common.sheets.js"></script>
    <script src="RGraph/libraries/RGraph.common.key.js"></script>
    <script src="RGraph/libraries/RGraph.common.sheets.js"></script>
    <script src="RGraph/libraries/RGraph.common.core.js"></script>
    <script src="RGraph/libraries/RGraph.bar.js"></script>
    <script src="RGraph/libraries/RGraph.gauge.js"></script>
    <!--    <script src="canvasjs.min.js"></script>-->
    <!--    <script src="jquery.canvasjs.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</head>

<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-black w3-bar-block" style="width:15%">
    <a href="index.php"><img src="img/logoITSiechnice.png" height="109" width="288"/></a>
    <a href="index.php"><h3 class="w3-bar-item w3-center"><i class="fa fa-home"> Home</i></h3></a>
    <div class="w3-sidebar w3-bar-block w3-black" style="width: 15%">
        <div><a href="vs1.php" class="w3-bar-item w3-button w3-blue w3-left-align w3-center w3-xlarge">VS1</a></div>
        <div><a href="vs2.php" class="w3-bar-item w3-button w3-green w3-left-align w3-center w3-xlarge">VS2</a></div>
        <div><a href="vs3.php" class="w3-bar-item w3-button w3-yellow w3-left-align w3-center w3-xlarge">VS3</a></div>
        <div><a href="vs4.php" class="w3-bar-item w3-button w3-purple w3-left-align w3-center w3-xlarge">VS4</a></div>
        <div><a href="vs5.php" class="w3-bar-item w3-button w3-gray w3-left-align w3-center w3-xlarge">VS5</a></div>
        <a href="vs9.php" class="w3-bar-item w3-button w3-black w3-left-align w3-center w3-xlarge">VS9</a>
        <a href="bhp.php" class="w3-bar-item w3-button w3-light-green w3-left-align w3-center w3-xlarge">BHP</a>
        <a href="quality.php" class="w3-bar-item w3-button w3-dark-gray w3-left-align w3-center w3-xlarge">QUALITY</a>
    </div>
</div>

<!-- Page Content -->
<div id="mainContent" style="margin-left:15%">
    <div class="w3-container w3-text-black">
        <div id="naglowki"><h1 id="topTitle" style="text-align: center">Key Performance Indicators Parker Hannifin
                Manufacturing Sp. z o. o. Siechnice</h1>
            <hr>
            <h2 style="text-align: center">Dzisiejsza data to: <span id="date"></span></h2>
            <!--<h2 style="text-align: center">Poprzedni dzień roboczy: <span id="dzienRoboczy"></span></h2>-->
            <hr>
            <div class="charts" style="height: 800px;width: 100%;">
                <!--                <div id="piechart"></div>-->
                <!--                <div id="chart_div"></div>-->
                <!--                <canvas id="cvs" width="300" height="300"></canvas>-->
                <div class="czarcik" id="chartContainer1"  style="height: 400px;width: 50%;">
                    <script type="text/javascript">
                        $(function () {
                            var chart1 = new CanvasJS.Chart("chartContainer1",
                                {
                                    theme: "theme2",
                                    animationEnabled: true,
                                    title: {
                                        text: "LISC [%]"
                                    },
                                    axisY:{
                                        maximum: 100,
                                        interval: 20,
                                        stripLines:[
                                            {
                                                value: <?php echo json_encode($excel_result9*100, JSON_NUMERIC_CHECK); ?>,
                                                lineDashType: "dot",
                                                label: "Cel: <?php echo json_encode($excel_result9*100, JSON_NUMERIC_CHECK); ?>%",
                                                showOnTop: true,
                                                thickness: 5,
                                                labelPlacement: "outside"
                                            }
                                        ]
                                    },
                                    data: [
                                        {
                                            indexLabel: "{y}",
                                            indexLabelPlacement: "outside",
                                            indexLabelOrientation: "horizontal",
                                            indexLabelFontColor: "black",
                                            type: "column",
                                            dataPoints: <?php echo json_encode($dataPo, JSON_NUMERIC_CHECK); ?>
                                        }
                                    ]
                                });
                            chart1.render();
                        });
                    </script>
                </div>
                <div class="czarcik" id="chartContainer2" style="height: 400px;width: 50%">
                    <script type="text/javascript">
                        $(function () {
                            var chart2 = new CanvasJS.Chart("chartContainer2",
                                {
                                    theme: "theme2",
                                    animationEnabled: true,
                                    title: {
                                        text: "MISSER [ppt]"
                                    },
                                    axisY:{
                                        stripLines:[
                                            {
                                                value: <?php echo json_encode($excel_result12, JSON_NUMERIC_CHECK); ?>,
                                                lineDashType: "dot",
                                                label: "Cel: <?php echo json_encode($excel_result12, JSON_NUMERIC_CHECK); ?>",//zmieniac auto cel<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                                                showOnTop: true,
                                                thickness: 5,
                                                labelPlacement: "outside"
                                            }
                                        ]
                                    },
                                    data: [
                                        {
                                            indexLabel: "{y}",
                                            indexLabelPlacement: "outside",
                                            indexLabelOrientation: "horizontal",
                                            indexLabelFontColor: "black",
                                            type: "column",
                                            dataPoints: <?php echo json_encode($dataPoi, JSON_NUMERIC_CHECK); ?>
                                        }
                                    ]
                                });
                            chart2.render();
                        });
                    </script>
                </div>
                <div class="czarcik" id="chartContainer3" style="height: 400px;width: 50%">
                    <script type="text/javascript">
                        $(function () {
                            var chart3 = new CanvasJS.Chart("chartContainer3",
                                {
                                    theme: "theme2",
                                    animationEnabled: true,
                                    title: {
                                        text: "Najstarsze zamówienie [dni]"
                                    },
                                    axisY:{
                                        stripLines:[
                                            {
                                                value: <?php echo json_encode($excel_result15, JSON_NUMERIC_CHECK); ?>,
                                                lineDashType: "dot",
                                                label: "Cel: <?php echo json_encode($excel_result15, JSON_NUMERIC_CHECK); ?>",//zmieniac auto cel<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                                                showOnTop: true,
                                                thickness: 5,
                                                labelPlacement: "outside"
                                            }
                                        ]
                                    },
                                    data: [
                                        {
                                            indexLabel: "{y}",
                                            indexLabelPlacement: "outside",
                                            indexLabelOrientation: "horizontal",
                                            indexLabelFontColor: "black",
                                            type: "column",
                                            dataPoints: <?php echo json_encode($dataPoin, JSON_NUMERIC_CHECK); ?>
                                        }
                                    ]
                                });
                            chart3.render();
                        });
                    </script>
                </div>
                <div class="czarcik" id="chartContainer4" style="height: 400px;width: 50%">
                    <script type="text/javascript">
                        $(function () {
                            var chart4 = new CanvasJS.Chart("chartContainer4",
                                {
                                    theme: "theme2",
                                    animationEnabled: true,
                                    title: {
                                        text: "LB [dni]"
                                    },
                                    axisY:{
                                        stripLines:[
                                            {
                                                value: <?php echo json_encode($excel_result18, JSON_NUMERIC_CHECK); ?>,
                                                lineDashType: "dot",
                                                label: "Cel: <?php echo json_encode($excel_result18, JSON_NUMERIC_CHECK); ?>",//zmieniac auto cel<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                                                showOnTop: true,
                                                thickness: 5,
                                                labelPlacement: "outside"
                                            }
                                        ]
                                    },
                                    data: [
                                        {
                                            indexLabel: "{y}",
                                            indexLabelPlacement: "outside",
                                            indexLabelOrientation: "horizontal",
                                            indexLabelFontColor: "black",
                                            type: "column",
                                            dataPoints: <?php echo json_encode($dataPoint, JSON_NUMERIC_CHECK); ?>
                                        }
                                    ]
                                });
                            chart4.render();
                        });
                    </script>
                </div>
                <div class="czarcik" id="chartContainer5" style="height: 400px;width: 50%">
                    <script type="text/javascript">
                        $(function () {
                            var chart5 = new CanvasJS.Chart("chartContainer5",
                                {

                                    theme: "theme2",
                                    animationEnabled: true,
                                    title: {
                                        text: "Opóźnione linie"
                                    },
                                    axisY:{
                                        stripLines:[
                                            {
                                                value: <?php echo json_encode($excel_result21, JSON_NUMERIC_CHECK); ?>,
                                                lineDashType: "dot",
                                                label: "Cel: <?php echo json_encode($excel_result21, JSON_NUMERIC_CHECK); ?>",//zmieniac auto cel<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
                                                showOnTop: true,
                                                thickness: 5,
                                                labelPlacement: "outside"
                                            }
                                        ]
                                    },
                                    data: [
                                        {
                                            indexLabel: "{y}",
                                            indexLabelPlacement: "outside",
                                            indexLabelOrientation: "horizontal",
                                            indexLabelFontColor: "black",
                                            type: "column",
                                            dataPoints: <?php echo json_encode($dataPointt, JSON_NUMERIC_CHECK); ?>
                                        }
                                    ]
                                });
                            chart5.render();
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scripts -->
<script type="text/javascript">
    //google.charts.load('current', {'packages': ['corechart']});
    //google.charts.setOnLoadCallback(drawChart);
    todayDate();
    //dzienRoboczy();
    drawChart();
    initialize();
    handleQueryResponse();
</script>

<!--<script>
    new RGraph.Sheets('1HVCTrOhjWhqCR3EwJezPBjGx2cySZApNHki9EiiAl7c', 4, function (sheet) {
        var value = sheet.get('A1');

        var gauge = new RGraph.Gauge({
            id: 'cvs',
            min: 0,
            max: 100,
            value: value,
            options: {}
        }).grow();
    });
</script>
<script src="https://spreadsheets.google.com/feeds/cells/1HVCTrOhjWhqCR3EwJezPBjGx2cySZApNHki9EiiAl7c/1/public/full?alt=json-in-script&amp;callback=__rgraph_JSONPCallback"></script>
<!-- Scripts End -->

</body>
</html>