<?php

require_once("connector.php");
$query = "SELECT name FROM countries";
foreach ($dbh->query($query) as $row) {
    echo $row['name'] . "<br>";
}
$dbh = null;