<?php
require_once("util-db.php");
require_once("model-coaches-chart.php");

$pageTitle = "Coaches Team Chart";
include "view-header.php";
$coaches = selectCoaches();
include "view-coaches-chart.php";
include "view-footer.php";
?>
<p>This chart displays the different teams and how many coaches those teams have</p>
