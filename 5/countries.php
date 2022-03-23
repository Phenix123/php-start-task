<?php

require_once("connector.php");
$query = "SELECT name FROM countries";
if (isset($dbh)) {
    foreach ($dbh->query($query) as $row) {
        echo $row['name'] . "<br>";
    }
}
$dbh = null;