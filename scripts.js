/**
 * Created by TFD054IT0154 on 24.08.2017.
 */
function todayDate() {
    n = new Date();
    y = n.getFullYear();
    m = n.getMonth() + 1;
    d = n.getDate();
    document.getElementById("date").innerHTML = d + "/" + m + "/" + y;
}

function dzienRoboczy() {
    dzienRob = new Date();
    d = dzienRob.getDay();
    var today;
    //Sunday=0, Monday=1 etc.
    if (d == 1) { //jak poniedzialek to pokazac piatek
        document.getElementById("dzienRoboczy").innerHTML = 5;
    } else if (d == 2) {
        today = "2";
        document.getElementById("dzienRoboczy").innerHTML = today - 1;
    } else if (d == 3) {
        today = "3";
        document.getElementById("dzienRoboczy").innerHTML = today - 1;
    } else if (d == 4) {
        today = "4";
        document.getElementById("dzienRoboczy").innerHTML = today - 1;
    } else if (d == 5) {
        today = "5";
        document.getElementById("dzienRoboczy").innerHTML = today - 1;
    } else if (d == 6) {
        today = "6";
        document.getElementById("dzienRoboczy").innerHTML = today - 1;
    }
}


//kpitownhall@gmail.com
//parkermichal4321
//https://www.rgraph.net/forum/index.html

/*function loadDoc(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){
            document.getElementById("charts").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "??NAZWA??.html", true);
    xhttp.send();
}
*/