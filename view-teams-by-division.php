<h1>Teams by Division</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
        <th>Team Location</th>
        <th>Team Name</th>
        <th>Conference</th>
      <th>Division Name</th>
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
  <td><?php echo $team['division_conference']; ?></td>
  <td><?php echo $team['divison_name']; ?></td>
</tr>     
  <?php
  
}
?>
    </tbody>
  </table>
</div>
