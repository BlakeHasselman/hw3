<h1>Teams Chart</h1>
<center>
    <div class="chart-container" style="height:80vh; width:100vw">
    <canvas id="myChart"></canvas>
    </div>
</center>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
const config = {
  type: 'bar',
  data: {
    datasets: [{
        barPercentage: 0.5,
        barThickness: 6,
        maxBarThickness: 8,
        minBarLength: 2,
        data: [10, 20, 30, 40, 50, 60, 70]
    }]
};,
    
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  },
};
</script>
