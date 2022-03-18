<?php

require_once("connector.php");
$country = "\"" . $_POST['country'] . "\"";

$query = "INSERT INTO countries (name) VALUES (" . $country . ")";

$dbh->query($query);
$dbh = null;

header("Location: ./index.php");