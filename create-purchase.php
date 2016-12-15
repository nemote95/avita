<?php
include 'config.php';
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: 401.php");
    exit;
}

$UID = $_SESSION["user"];
$current_date = date('y-m-d');

$type=false;
if($_POST['type']=="1"){
    $type=true;
}

//get basket id
$current_basket_query = $dbh->prepare("select BID from basket where
                                                basket.UID= :UID and basket.BID not in 
                                                (select purchase.BID from purchase);");
$current_basket_query->bindParam(':UID', $UID);
$current_basket_query->execute();
$current_basket = $current_basket_query->fetch()["BID"];

//new purchase
if ($current_basket == null) {
    header("Location: checkout-step-error.php?err=nobasket");}
else if(!$type){
    $create_purchase_query = $dbh->prepare("INSERT INTO purchase 
                                            (type,date,phone,last_name,first_name,address,BID)
                                             VALUES (:type,:date,:phone,:lastName,:firstName,:addr,:BID);");

    $create_purchase_query->bindParam(':BID', $current_basket);
    $create_purchase_query->bindParam(':type', $type);
    $create_purchase_query->bindParam(':firstName', $_POST["firstName"]);
    $create_purchase_query->bindParam(':lastName', $_POST["lastName"]);
    $create_purchase_query->bindParam(':addr', $_POST["addr"]);
    $create_purchase_query->bindParam(':phone', $_POST["telephone"]);
    $create_purchase_query->bindParam(':date', $current_date);
    $create_purchase_query->execute();

    //need a better query
    $basket_items_query = $dbh->prepare("UPDATE  basket_product,product  
                                        SET product.count=product.count-basket_product.Count 
                                        WHERE basket_product.PRID=product.PRID AND                                                            
                                        basket_product.BID=:BID;");

    $basket_items_query->bindParam(':BID', $current_basket);
    $basket_items_query->execute();

    //header('Location:checkout-step-3.php?BID='.$current_basket);
}

