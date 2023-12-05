<h1>Coaches Team Chart</h1>
<center>
    <p>This chart shows the different teams and how many coaches the team has</p>
    </center>
<center>
    <div class="chart-container" style="height:80vh; width:100vw">
    <canvas id="myChart"></canvas>
    </div>
</center>
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
  echo $coach['num_coach'] . ", ";
}
?>

        ]
    }],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [
<?php
$coaches = selectCoaches();
while ($coach = $coaches->fetch_assoc()) {
  echo "'" . $coach['team_name'] . "', ";
}
?>
    ]
},
  });
</script>
