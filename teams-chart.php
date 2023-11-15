<?php
require_once("util-db.php");
require_once("model-teams-chart.php");

$pageTitle = "Teams Chart";
include "view-header.php";
$teams = selectTeams();
include "view-teams-chart.php";
include "view-footer.php";
?>
