/**
 * Created by TFD054IT0154 on 25.08.2017.
 */
// Create a new RGraph Sheets object using the key of the spreadsheet and
// the callback function that creates the chart. The RGraph.Sheets object is
// passed to the callback function as an argument so it doesn't need to be
// assigned to a variable when it's created
function demos() {
    new RGraph.Sheets('2PACX-1vTwMVN3C_DaOhDuivWoL7rJP4kFma1QFy-3F-uR92l_RAAb07iG7KDNok9MkrvdSEQqpBVzjnBQkaVB', function (sheet)
    {
        var data   = sheet.get('A1');
        var labels = sheet.get('A1');

        for (var i=0; i<labels.length; i+=2) {
            labels[i] = "\n" + labels[i];
        }

        var bar = new RGraph.Bar({
            id: 'cvs',
            data: data,
            options: {
                labels: labels,
                colors: ['#f66'],
                shadow: false,
                strokestyle: 'rgba(0,0,0,0)',
                scaleZerostart: true,
                noaxes: true,
                gutterLeft: 50,
                gutterBottom: 70,
                textAccessible: true,
                backgroundGridVlines: false,
                backgroundGridBorder: false,
                textSize: 16
            }
        }).wave();
    });}
    //kpitownhall@gmail.com
//parkermichal4321