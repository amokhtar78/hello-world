<?php
srand();
$files = array("includes/quote1.php", "includes/quote2.php", "includes/quote3.php");
$rand = array_rand($files);
include ($files[$rand]);
?>