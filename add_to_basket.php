<?php
include 'config.php';
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: 401.php");
    exit;
}

if (!isset($_POST['PRID'])) {
    header("Location: 404.php");
    exit;
}

//set count
if (isset($_POST['count'])) {
    $count = $_POST['count'];
} else {
    $count = 1;
}


// add to basket
$UID = $_SESSION["user"];
$PRID=$_POST["PRID"];

//get basket id
$current_basket_query = $dbh->prepare("select BID from basket where
                                                basket.UID= :UID and basket.BID not in 
                                                (select purchase.BID from purchase);");
$current_basket_query->bindParam(':UID', $UID);
$current_basket_query->execute();
$current_basket = $current_basket_query->fetch()["BID"];
//new basket
if ($current_basket == null) {
    $sql = $dbh->prepare("INSERT INTO basket (UID) VALUES (:UID);");
    $sql->bindParam(':UID', $UID);
    $sql->execute();

    //this could be coded more efficiently :((
    $current_basket_query = $dbh->prepare("select BID from basket where
                                                basket.UID= :UID and basket.BID not in 
                                                (select purchase.BID from purchase);");
    $current_basket_query->bindParam(':UID', $UID);
    $current_basket_query->execute();
    $current_basket = $current_basket_query->fetch()["BID"];
}
//add to basket
$sql = $dbh->prepare("INSERT INTO basket_product (BID,PRID,Count)
    VALUES (:BID , :PRID,:count);");
$sql->bindParam(':BID', $current_basket);
$sql->bindParam(':PRID', $PRID);
$sql->bindParam(':count', $count);
$sql->execute();

header('Location: ' . $_SERVER['HTTP_REFERER']);
