<h1>Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Location</th>
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
</tr>     
  <?php
  
}
?>
    </tbody>
  </table>
</div>
