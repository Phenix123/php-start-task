<?php
try {
    $user = "root";
    $pass = "admin";
    $dbh = new PDO('mysql:host=localhost;dbname=intervolga_country', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}