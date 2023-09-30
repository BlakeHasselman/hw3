<h1>Teams by Division</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Conference</th>
      <th>Division Name</th>
        <th>Team Location</th>
        <th>Team Name</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($division = $divisions->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $division['team_id']; ?></td>
  <td><?php echo $division['division_conference']; ?></td>
  <td><?php echo $division['divison_name']; ?></td>
  <td><?php echo $division['team_location']; ?></td>
  <td><?php echo $division['team_name']; ?></td>
</tr>     
  <?php
  
}
?>
    </tbody>
  </table>
</div>
