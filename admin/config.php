<?php
/*try {
    $user='SA';
    $pass = 'password';
    //$dbh = new PDO('sqlsrv:Server=localhost;Database=avita', $user, $pass,array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    $dbh = new PDO("sqlsrv:Server=localhost;Database=avita", "SA", "1291995vIrGo",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}*/
try {
    $user='root';
    $pass = '123123';
    $dbh = new PDO('mysql:host=localhost;dbname=avita', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}


