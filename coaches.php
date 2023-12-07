<?php
require_once("util-db.php");
require_once("model-coaches.php");

$pageTitle = "Coaches";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
    case "Add":
      if (insertCoach($_POST['tID'], $_POST['cName'], $_POST['cPosition'], $_POST['cStart'], $_POST['cWins'], $_POST['cLosses'])) {
        echo '<div class="alert alert-success" role="alert">Coach Added!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
        break;
    case "Edit":
      if (updateCoach($_POST['tID'], $_POST['cName'], $_POST['cPosition'], $_POST['cStart'], $_POST['cWins'], $_POST['cLosses'], $_POST['cID'])) {
        echo '<div class="alert alert-success" role="alert">Coach Edited!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
        break;
    case "Delete":
      if (deleteCoach($_POST['cid'])) {
        echo '<div class="alert alert-success" role="alert">Coach Deleted!</div>';
      } else {
        echo '<div class="alert alert-danger" role="alert">Error</div>';
      }
        break;  }
}
$coaches = selectCoaches();
include "view-coaches.php";
include "view-footer.php";
?>
