
<?php
try {
    $user='root';
    $pass = '123123';
    $dbh = new PDO('mysql:host=localhost;dbname=avita', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

