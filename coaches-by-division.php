<?php
require_once("util-db.php");
require_once("model-coaches-by-division.php");

$pageTitle = "Coaches by Division";
include "view-header.php";
$coaches = selectCoachesByDivision($_POST['did']);
include "view-coaches-by-division.php";
include "view-footer.php";
?>
