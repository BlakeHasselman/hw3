<h1>Teams</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Staff Position</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($team = $coaches->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $team['coach_id']; ?></td>
  <td><?php echo $team['coach_name']; ?></td>
  <td><?php echo $team['coach_position']; ?></td>
</tr>     
  <?php
  
}
?>
    </tbody>
  </table>
</div>
