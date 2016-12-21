<?php
include 'config.php';
try {
    if ($_POST["DID"]!="") {

        $stmnt = $dbh->prepare("insert into product VALUES (:name,:cost,:color,:size,:count,:SID,:CAID,:DID);");
        $stmnt->bindParam(':DID', $_POST['DID']);
    } else {
        $stmnt = $dbh->prepare("insert into product VALUES (:name,:cost,:color,:size,:count,:SID,:CAID,null);");
    }
    $stmnt->bindParam(':name', $_POST['name']);
    $stmnt->bindParam(':cost', $_POST['cost']);
    $stmnt->bindParam(':color', $_POST['color']);
    $stmnt->bindParam(':size', $_POST['size']);
    $stmnt->bindParam(':count', $_POST['count']);
    $stmnt->bindParam(':SID', $_POST['SID']);
    $stmnt->bindParam(':CAID', $_POST['CAID']);

    $stmnt->execute();
    header('Location: product_list.php');
} catch (PDOException $err) {
    echo $err->getMessage();
    echo '<a href="product_list.php">Back</a>';
    exit();
}