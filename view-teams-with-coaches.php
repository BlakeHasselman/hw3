<h1>Teams with Coaches</h1>
<div class="card-group">
<?php
while ($team = $teams->fetch_assoc()) {
  ?>
<div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $team['team_name']; ?></h5>
      <p class="card-text">
  <?php
    $coaches = selectCoachesByTeam($team['team_id']);
    while ($coach = $coaches->fetch_assoc()) {
?>
<?php
    }
  ?>
      </p>
      <p class="card-text"><small class="text-body-secondary">:Location: <?php echo $team['team_location']; ?></small></p>
    </div>
  </div>
<?php
  
}
?>
</div>
