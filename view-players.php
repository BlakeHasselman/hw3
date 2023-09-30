<h1>Players</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Position</th>
      <th></th>
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
  <td><a href="players-by-team.php?id=<?php echo $player['player_id']; ?>">Player's Coaches and Team</a></td>
</tr>     
  <?php
  
}
?>
    </tbody>
  </table>
</div>
