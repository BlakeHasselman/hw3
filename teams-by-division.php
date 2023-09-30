<?php
require_once("util-db.php");
require_once("model-teams-by-division.php");

$pageTitle = "Teams by Division";
include "view-header.php";
$divisions = selectTeamsByDivsion($_GET['id']);
include "view-teams-by-divsion.php";
include "view-footer.php";
?>
