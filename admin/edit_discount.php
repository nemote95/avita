<?php
include 'config.php';
try{
    $stmnt=$dbh->prepare("update discount SET percentage=:percentage WHERE DID=:DID;");
    $stmnt->bindParam(':percentage',$_POST['percentage']);
    $stmnt->bindParam(':DID',$_POST['DID']);
    $stmnt->execute();
    header('Location: discount_list.php');
    }
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="discount_list.php">Back</a>';
    exit();
}