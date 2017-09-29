<!DOCTYPE html>
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
    <script type="text/javascript" src="timerUp.js"></script>

    <!-- <script src="RGraph/libraries/RGraph.common.sheets.js"></script>
    <script src="RGraph/libraries/RGraph.common.key.js"></script>
    <script src="RGraph/libraries/RGraph.common.sheets.js"></script>
    <script src="RGraph/libraries/RGraph.common.core.js"></script>
    <script src="RGraph/libraries/RGraph.bar.js"></script>
    <script src="RGraph/libraries/RGraph.gauge.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>


<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-black w3-bar-block" style="width:15%">
    <a href="index.php"><img src="img/logoITSiechnice.png" height="109" width="288"/></a>
    <a href="index.php"><h3 class="w3-bar-item w3-center"><i class="fa fa-home"> Home</i></h3></a>
    <div class="w3-sidebar w3-bar-block w3-black" style="width: 15%">
        <div><a href="vs1.php" class="w3-bar-item w3-button w3-blue-gray w3-left-align w3-center w3-xlarge">VS1</a></div>
        <div><a href="vs2.php" class="w3-bar-item w3-button w3-blue w3-left-align w3-center w3-xlarge">VS2</a></div>
        <div><a href="vs3.php" class="w3-bar-item w3-button w3-red w3-left-align w3-center w3-xlarge">VS3</a></div>
        <div><a href="vs4.php" class="w3-bar-item w3-button w3-aqua w3-left-align w3-center w3-xlarge">VS4</a></div>
        <div><a href="vs5.php" class="w3-bar-item w3-button w3-orange w3-left-align w3-center w3-xlarge">VS5</a></div>
        <a href="vs9.php" class="w3-bar-item w3-button w3-teal w3-left-align w3-center w3-xlarge">VS9</a>
        <a href="bhp.php" class="w3-bar-item w3-button w3-light-green w3-left-align w3-center w3-xlarge">> BHP <</a>
        <a href="quality.php" class="w3-bar-item w3-button w3-dark-gray w3-left-align w3-center w3-xlarge">QUALITY</a>
        <div id="refresh"><a href="bhp.php"><i class="fa fa-refresh w3-xxxlarge"></i></a></div>
    </div>
</div>

<!-- Page Content -->
<div id="mainContent" style="margin-left:15%">
    <div class="w3-container w3-text-light-gray">
        <div id="naglowki"><h1 id="topTitle" style="text-align: center">Key Performance Indicators Parker Hannifin
                Manufacturing Sp. z o. o. Siechnice</h1>
            <hr>
            <h2 style="text-align: center"><span id="date"></span></h2>
            <!--<h2 style="text-align: center">Poprzedni dzień roboczy: <span id="dzienRoboczy"></span></h2>-->
            <hr>
            <div class="charts">
                <!--                <div id="piechart"></div>-->
                <!--                <div id="chart_div"></div>-->
                <!--                <canvas id="cvs" width="300" height="300"></canvas>-->
                <div id="chartContainer" style="height: 300px;width: 50%">
                    <div class="counter"><h3>Dni bez wypadku: </h3>
                    <h1 id="demo"></h1>
                        <form>
                            <label for="password"><input type="password" name="password" size="15" id="password" onkeyup="activateBtn()" /></label>
<!--                            <input type="submit" id='delete' class='delete' disabled name="delete" value='Reset' onclick="resetFunc()" />-->
                        </form>

                        <script type="text/javascript">
                            function activateBtn() {
                               pass = document.getElementById('password').value;
                                if (pass == "1917"){
//                                    document.getElementById('password').onkeyup = function(){
//                                        document.getElementById('delete').disabled = false;
                                    countDownDate = new Date(); localStorage.setItem('startDate', countDownDate);
                                    //jak (nie) wypadek BHP to countDownDate = new Date("Sep 20, 2017 11:00:00");!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
                                    window.location.href = "bhp.php";

                            }}
                        </script>
<!--                        <script type="text/javascript">-->
<!--                            function resetFunc(){-->
<!--                                countDownDate = new Date(); localStorage.setItem('startDate', countDownDate);-->
<!--                            }-->
<!--                        </script>-->
<!--                    <script type="text/javascript">-->
<!---->
<!--                        countDownDate = new Date(); localStorage.setItem('startDate', countDownDate);-->
<!--                        var countDownDate = localStorage.getItem('startDate');-->
<!--                        if (countDownDate) {-->
<!--                            countDownDate = new Date(countDownDate);-->
<!--                        } else {-->
<!--                            countDownDate = new Date();-->
<!--                            localStorage.setItem('startDate', countDownDate);-->
<!--                        }-->
<!--                        // Update the count down every 1 second-->
<!--                        var x = setInterval(function() {-->
<!---->
<!--                            // Get todays date and time-->
<!--                            var now = new Date().getTime();-->
<!---->
<!--                            // Find the distance between now an the count down date-->
<!--                            var distance = now - countDownDate.getTime();-->
<!---->
<!--                            // Time calculations for days, hours, minutes and seconds-->
<!--                            var days = Math.floor(distance / (1000 * 60 * 60 * 24));-->
<!--                            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));-->
<!--                            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));-->
<!--                            var seconds = Math.floor((distance % (1000 * 60)) / 1000);-->
<!---->
<!--                            // Output the result in an element with id="demo"-->
<!--                            document.getElementById("demo").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";-->
<!--                        }, 1000);-->
<!--                    </script>-->
                    </div>
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