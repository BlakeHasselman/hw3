<h1>Coaches Chart</h1>
<div class="chart-container" style="height:140vh; width:180vw">
    <canvas id="myChart"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'doughnut',
    data: {
    datasets: [{
        data: [
<?php
while ($coach = $coaches->fetch_assoc()) {
  echo $coach['num_div'] . ", ";
}
?>

        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$coaches = selectCoaches();
while ($coach = $coaches->fetch_assoc()) {
  echo "'" . $coach['coach_name'] . "', ";
}
?>
    ]
},
  });
</script>
