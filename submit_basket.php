<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12/14/16
 * Time: 2:18 AM
 */
include 'config.php';
session_start();
if (!isset($_SESSION['user'])){
    header("Location: 401.php");
    exit;
}
else{
    $UID=$_SESSION['user'];}


$items = json_decode(stripslashes($_POST['data']));

$current_basket_query = $dbh->prepare("SELECT basket.BID FROM basket WHERE
                                                basket.UID= :UID AND basket.BID NOT IN 
                                                (SELECT purchase.BID FROM  purchase);");
$current_basket_query->bindParam(':UID', $UID);
$current_basket_query->execute();
$BID = $current_basket_query->fetch()['BID'];

//maybe teachers will ask us update queries but this code is more efficient !

$delete_old_basket_query = $dbh->prepare("DELETE FROM basket_product where BID=:BID;");
$delete_old_basket_query->bindParam(':BID', $BID);
$delete_old_basket_query->execute();

foreach ($items as $item){
    $sql = $dbh->prepare("INSERT INTO basket_product (BID,PRID,Count)
    VALUES (:BID , :PRID,:count);");
    $sql->bindParam(':BID', $BID);
    $sql->bindParam(':PRID', $item->prid);
    var_dump($item->prid);
    $sql->bindParam(':count', $item->amount);
    $sql->execute();
}
