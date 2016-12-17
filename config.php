<?php
try {
    $user='SA';
    $pass = 'password';
    //$dbh = new PDO('sqlsrv:Server=localhost;Database=avita', $user, $pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $dbh = new PDO("sqlsrv:Server=localhost;Database=avita", "SA", "1291995vIrGo",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
