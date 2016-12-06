
<?php
try {
    $user='root';
    $pass = '9452';
    $dbh = new PDO('mysql:host=localhost;dbname=avita', $user, $pass);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

