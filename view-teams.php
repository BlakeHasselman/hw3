<h1>Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Location</th>
        <th>Link to Coaches and Team</th>
        <th>Link to Teams and Division</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $teams->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $team['team_id']; ?></td>
  <td><?php echo $team['team_name']; ?></td>
  <td><?php echo $team['team_location']; ?></td>
  <td><a href="coaches-by-team.php?id=<?php echo $team['team_id']; ?>">Coaches</a></td>
  <td><a href="teams-by-division.php?id=<?php echo $team['team_id']; ?>">Division</a></td>
</tr>     
  <?php
  
}
?>
    </tbody>
  </table>
</div>
