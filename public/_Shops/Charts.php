
<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">

      // Load the Visualization API and the piechart package.
      google.load('visualization', '1.0', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Months');
        data.addColumn('number', 'Sales');
        data.addRows([
          ['February', 1],
          ['March', 2],
          ['April', 3],
          ['May', 2],
          ['June', 1],
		  ['January',5]
        ]);
		
		//Bar Chart Data
		 var data2 = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses',{role:'annotation'}],
          ['2004', 1000,400,'400'],
          ['2005', 1170,460,'460'],
          ['2006', 660 ,1120,'1120'],
          ['2007', 1030,540,'540']
        ]);

        // Set chart options
        var options = {'title':'Sales Of Last 6 Months',
                       'width':900,
                       'height':500};
		  var options2 = {
          title: 'Shop Performance',
          vAxis: {title: 'Year',  titleTextStyle: {color: 'red'}}
        };

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div2'));
        chart.draw(data2, options2);
        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.LineChart(document.getElementById('chart_div3'));
        chart.draw(data2, options2);
      }
    </script>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
    <div id="chart_div2" style="width:900px; height:500px"></div>
    <div id="chart_div3" style="width:900px; height:500px"></div>
  </body>
</html>
<?php
?>