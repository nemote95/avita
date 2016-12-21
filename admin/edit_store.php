<?php
include 'config.php';
try{
    $stmnt=$dbh->prepare("update store SET name=:name WHERE SID=:SID;");
    $stmnt->bindParam(':name',$_POST['name']);
    $stmnt->bindParam(':SID',$_POST['SID']);
    $stmnt->execute();
    header('Location: store_list.php');
    }
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="store_list.php">Back</a>';
    exit();
}