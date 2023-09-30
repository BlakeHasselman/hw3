<h1>Coaches by Division</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
        <th>Coach Name</th>
        <th>Coach Position</th>
        <th>Conference</th>
      <th>Division Name</th>
      </tr>
    </thead>
    <tbody>
<?php
while ($coach = $coaches->fetch_assoc()) {
  ?>
<tr>
  <td><?php echo $coach['coach_id']; ?></td>
  <td><?php echo $coach['coach_name']; ?></td>
  <td><?php echo $coach['coach_position']; ?></td>
  <td><?php echo $coach['division_conference']; ?></td>
  <td><?php echo $coach['divison_name']; ?></td>
</tr>     
  <?php
  
}
?>
    </tbody>
  </table>
</div>
