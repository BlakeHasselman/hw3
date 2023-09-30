<h1>Teams with Coaches</h1>
<div class="card-group">
<?php
while ($team = $teams->fetch_assoc()) {
  ?>
<div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $team['team_name']; ?></h5>
      <p class="card-text">
        <ul class="list-group">
  <?php
    $coaches = selectCoachesByTeam($team['team_id']);
    while ($coach = $coaches->fetch_assoc()) {
?>
      <li class="list-group-item"><?php echo $coach['coach_name']; ?> - <?php echo $coach['coach_position']; ?> - <?php echo $coach['team_location']; ?> - <?php echo $coach['team_name']; ?></li>
<?php
    }
  ?>
        </ul>
        </p>
      <p class="card-text"><small class="text-body-secondary">:Location: <?php echo $team['team_location']; ?></small></p>
    </div>
  </div>
<?php
  
}
?>
</div>
