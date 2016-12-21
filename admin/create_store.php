<?php
include 'config.php';
try{
$stmnt=$dbh->prepare("insert into store VALUES (:name);");
$stmnt->bindParam(':name',$_POST['name']);
$stmnt->execute();
header('Location: store_list.php');}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="store_list.php">Back</a>';
    exit();
}