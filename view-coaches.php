<div class="row">
  <div class="col">
    <h1>Coaches</h1>
</div>
  <div class="col-auto">
<?php
include "view-coaches-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
      <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Staff Position</th>
        <th></th>
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
  <td>
    <form method="post" action="coaches-by-division.php">
      <input type="hidden" name="cid" value="<?php echo $coach['coach_id']; ?>">
        <button type="submit" class="btn btn-primary">Division</button>
      </form>
  </td>
</tr>     
  <?php
  
}
?>
    </tbody>
  </table>
</div>
