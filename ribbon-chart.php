<script src="https://plotly.com/javascript/animations/"></script>
<script>
Plotly.newPlot('myDiv', [{
  x: [1, 2, 3],
  y: [0, 0.5, 1],
  line: {simplify: false},
}]);

function randomize() {
  Plotly.animate('myDiv', {
    data: [{y: [Math.random(), Math.random(), Math.random()]}],
    traces: [0],
    layout: {}
  }, {
    transition: {
      duration: 500,
      easing: 'cubic-in-out'
    },
    frame: {
      duration: 500
    }
  })
}
</script>
