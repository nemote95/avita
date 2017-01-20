
<?php
try {
    $user='root';
    $pass = '123123';
    $dbh = new PDO('mysql:host=localhost;dbname=avita', $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

