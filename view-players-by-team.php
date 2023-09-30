<h1>Coaches by Team</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Player Name</th>
      <th>Player Position</th>
        <th>Team Location</th>
        <th>Team Name</th>
        <th>Coach Name</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($player = $players->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $player['player_id']; ?></td>
  <td><?php echo $player['player_name']; ?></td>
  <td><?php echo $player['player_position']; ?></td>
  <td><?php echo $player['team_location']; ?></td>
  <td><?php echo $player['team_name']; ?></td>
  <td><?php echo $player['coach_name']; ?></td>
</tr>     
  <?php
  
}
?>
    </tbody>
  </table>
</div>
