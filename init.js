/**
 * Created by TFD054IT0154 on 25.08.2017.
 */

function initialize() {
    var opts = {sendMethod: 'auto'};
    // Replace the data source URL on next line with your data source URL.
    var query = new google.visualization.Query("https://onedrive.live.com/view.aspx?resid=C340465BB51135BF!7783&ithint=file%2cxlsx&app=Excel&authkey=!AOGmcSUkZRpsCuM", opts);

    // Optional request to return only column C and the sum of column B, grouped by C members.
    query.setQuery('select A');

    // Send the query with a callback function.
    query.send(handleQueryResponse);
}

function handleQueryResponse(response) {

    if (response.isError()) {
        alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
        return;
    }

    var data = response.getDataTable();
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, {width: 400, height: 240});
}