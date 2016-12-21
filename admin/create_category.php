<?php
include 'config.php';
try{
$stmnt=$dbh->prepare("insert into category VALUES (:name);");
$stmnt->bindParam(':name',$_POST['name']);
$stmnt->execute();
header('Location: category_list.php');}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="category_list.php">Back</a>';
    exit();
}