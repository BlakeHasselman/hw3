<?php
require_once("util-db.php");
require_once("model-players-by-team.php");

$pageTitle = "Players by Coaches and Team";
include "view-header.php";
$players = selectPlayersByTeam($_GET['id']);
include "view-players-by-team.php";
include "view-footer.php";
?>
