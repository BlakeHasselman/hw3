<html>
<head>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
  <script src="https://cdn.anychart.com/releases/v8/js/anychart-data-adapter.min.js"></script>
  <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
  <link href="https://cdn.anychart.com/releases/v8/fonts/css/anychart-font.min.css" type="text/css" rel="stylesheet">
  <style type="text/css">

    html,
    body,
    #container {
      width: 100%;
      height: 100%;
      margin: 0;
      padding: 0;
    }
  
</style>
</head>
<body>
  
  <div id="container"></div>
  

  <script>

    anychart.onDocumentReady(function () {
      // The data used in this sample can be obtained from the CDN
      // https://cdn.anychart.com/samples/combined-chart/range-spline-area-and-marker-chart/data.json
      anychart.data.loadJsonFile(
        'https://cdn.anychart.com/samples/combined-chart/range-spline-area-and-marker-chart/data.json',
        function (data) {
          var dataSet = anychart.data.set(data);

          // map data for the first series, take x from the zero column and value from the first column of data set
          var firstSeriesData = dataSet.mapAs({ x: 0, low: 1, high: 2 });

          // map data for the second series, take x from the zero column and value from the second column of data set
          var secondSeriesData = dataSet.mapAs({ x: 0, value: 3 });

          // map data for the third series, take x from the zero column and value from the third column of data set
          var thirdSeriesData = dataSet.mapAs({ x: 0, value: 4 });

          // create column chart
          var chart = anychart.column();

          // turn on chart animation
          chart.animation(true);

          // set chart title text settings
          chart.title(
            'Combination of Range Spline-Area, Spline and Marker Chart'
          );

          // set settings for chart Y scale
          chart.yScale().minimum(-3).maximum(7).ticks({ interval: 1 });

          // set settings for chart X scale
          chart.xScale().ticks().interval(5);

          // create line series and set scale for it
          chart.rangeSplineArea(firstSeriesData);

          // create second series with mapped data
          chart.marker(secondSeriesData).size(2).hovered({ size: 5 });

          // create third series with mapped data
          chart.spline(thirdSeriesData).markers(false);

          // set container id for the chart
          chart.container('container');

          // initiate chart drawing
          chart.draw();
        }
      );
    });
  
</script>
</body>
</html>
