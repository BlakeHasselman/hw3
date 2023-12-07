<?php
require_once("util-db.php");
require_once("model-stats-by-team.php");

$pageTitle = "Stats by Team";
include "view-header.php";
$coaches = selectStatsByTeam($_GET['id']);
include "view-stats-by-team.php";
include "view-footer.php";
?>
