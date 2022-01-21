<!doctype html>
<html>
<head>
<title> Live Stock Example</title>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> 
<script src="http://code.highcharts.com/stock/highstock.js"></script>
<script src="http://code.highcharts.com/stock/modules/exporting.js"></script>
 
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">

    <!-- Slider
    ================================================== -->
    <link href="css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">


    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

<script type="text/javascript" src="js/css-pop.js"></script>
<link href="css/popup_style.css" rel="stylesheet" type="text/css" />


<script> 

//var chart1,chart2,chart3,chart4,chart5,chart6; // global

var chart = [,,,,,];
/**
 * Request data from the server, add it to the graph and set a timeout 
 * to request again
 */


function requestData(i) {
    $.ajax({
        url: 'live-server-data-read.php',
        data: {id: i},
        error: function(point) {
            var series = chart[i].series[0],
             shift = series.data.length > 50;  // shift if the series is longer than 20
   //          alert(point); //  DEBUGGER
            // add the point
            var values = eval(point);
             chart[i].series[0].addPoint([values[0],values[1]], true, shift);

            // call it again after five second
            setTimeout(requestData, 1000);    
        },
        success: function(point) {
            var series = chart[i].series[0],
             shift = series.data.length > 50;  // shift if the series is longer than 20
   //          alert(point); //  DEBUGGER
            // add the point
            var values = eval(point);
             chart[i].series[0].addPoint([values[0],values[1]], true, shift);

            // call it again after five second
            setTimeout(requestData(i), 1000);    
        },
        cache: false
    });
}


function Initialize_Graph(){
    for(var j=0;j<6;j++){
        chart[j] = new Highcharts.Chart({
                chart: {
                    renderTo: 'container'+j,
                    defaultSeriesType: 'spline',
                    backgroundColor: '#373739',
                    events: {
                        load: requestData(j)
                    }
                },
                title: {
                    text: 'Workshop IOT',
                    style:{
                        color: 'white',
                        fontSize: '20px'
                    }
                },
                xAxis: {
                    type: 'datetime',
                    tickPixelInterval: 150,
                    maxZoom: 20 * 1000
                },
                legend:{
                    itemStyle:{
                        color: 'white'
                    }
                },
                yAxis: {
                    minPadding: 0.2,
                    maxPadding: 0.2,
                    title: {
                        text: 'Value',
                        margin: 80,
                        style:{
                        color: 'white',
                        fontSize: '20px'
                    }
                    }
                },
                series: [{
                    name: 'Values',
                    data: []
                }]
            });        
    }
}


$(document).ready(function() {
    Initialize_Graph();
});

</script>
 
</head>

<body>

<div class="container-fluid">
    <div class="row">
        <div id="container0" class="col-md-6 col-sm-6">

        </div>
        <div id="container1" class="col-md-6 col-sm-6 ">
        </div>
    </div>
    <div class="row">
        <div id="container2" class="col-md-6 col-sm-6">

        </div>
        <div id="container3" class="col-md-6 col-sm-6 ">
        </div>
    </div>
    <div class="row">
        <div id="container4" class="col-md-6 col-sm-6">

        </div>
        <div id="container5" class="col-md-6 col-sm-6 ">
        </div>
    </div>    
</div>


</body>
</html>