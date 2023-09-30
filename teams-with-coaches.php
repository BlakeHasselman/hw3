<?php
require_once("util-db.php");
require_once("model-teams-with-coaches.php");

$pageTitle = "Teams with Coaches";
include "view-header.php";
$teams = selectTeams();
include "view-teams-with-coaches.php";
include "view-footer.php";
?>
