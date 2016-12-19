<?php


include 'config.php';
try{
$stmnt=$dbh->prepare("delete category where CAID=:CAID");
$stmnt->bindParam(':CAID',$_GET['CAID']);
$stmnt->execute();
header('Location: ' . $_SERVER['HTTP_REFERER']);}
catch(PDOException $err)
{
    var_dump($err->getMessage());
    echo '<a href="'.$_SERVER['HTTP_REFERER'].'">Back</a>';
    exit();
}