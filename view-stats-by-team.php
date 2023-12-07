<h1>Stats by Team</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
        <th>Team Location</th>
        <th>Team Name</th>
        <th>Year Founded</th>
      <th>Total Wins</th>
      <th>Total Losses</th>
      <th>Conference Rank</th>
      <th>Playoff Qualification</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $team['team_id']; ?></td>
  <td><?php echo $team['team_location']; ?></td>
  <td><?php echo $team['team_name']; ?></td>
  <td><?php echo $team['team_founded']; ?></td>
  <td><?php echo $team['wins']; ?></td>
  <td><?php echo $team['losses']; ?></td>
  <td><?php echo $team['conference_rank']; ?></td>
  <td><?php echo $team['playoff_status']; ?></td>
</tr>     
  <?php
  
}
?>
    </tbody>
  </table>
</div>
