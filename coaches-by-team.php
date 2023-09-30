<?php
require_once("util-db.php");
require_once("model-coaches-by-team.php");

$pageTitle = "Coaches by Team";
include "view-header.php";
$coaches = selectCoachesByTeam($_GET['id']);
include "view-coaches-by-team.php";
include "view-footer.php";
?>
