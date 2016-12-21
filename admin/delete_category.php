<?php


include 'config.php';
try{
$stmnt=$dbh->prepare("delete category where CAID=:CAID");
$stmnt->bindParam(':CAID',$_GET['CAID']);
$stmnt->execute();
header('Location: category_list.php');}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="category_list.php">Back</a>';
    exit();
}