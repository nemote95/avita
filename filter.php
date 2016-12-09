<?php
/**
 * Created by PhpStorm.
 * User: samane
 * Date: 08/12/2016
 * Time: 02:53 PM
 */
include 'config.php';
$CAID = $_GET['CAID'];
$sql = "SELECT * FROM product WHERE CAID = " . $CAID;
$products = $dbh->query($sql);
header('Location : shop.php?PRODUCT='.$products);
?>