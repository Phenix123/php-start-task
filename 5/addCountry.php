<?php

require_once("connector.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['country'])) {
        $country = $_POST['country'];

        $query = $dbh->prepare("INSERT INTO countries (name) VALUES (?)");
        $query->execute([$country]);

        $dbh->query($query);

    }
}
$dbh = null;
header("Location: ./index.php");