<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12/19/16
 * Time: 11:03 PM
 */
include 'config.php';
include 'header.php';
$products_stmnt=$dbh->prepare("select PRID,product.name as name,size,color,count,cost,percentage,category.name as cat,store.name as st
from product
                      LEFT OUTER JOIN discount ON product.DID=discount.DID
                      INNER JOIN category ON product.CAID=category.CAID
                       INNER JOIN store ON store.SID=product.SID ;");
$products_stmnt->execute();
$products=$products_stmnt->fetchAll();

echo '
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Products

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Products</li>
            </ol>
        </section>
    <section class="content">
    <table class="table table-bordered">
<tr>
      <td>PRID</td>
      <td>Name</td>
      <td>Size</td>
      <td>Color</td>
      <td>Count</td>
      <td>Cost</td>
      <td>Discount</td>
      <td>Category</td>
      <td>Store</td>
      <td>Action</td>
</tr>';
foreach ($products as $p){

    echo'<tr>
        <td>'.$p["PRID"].'</td>
        <td>'.$p["name"].'</td>
        <td>'.$p["size"].'</td>
        <td>'.$p["color"].'</td>
        <td>'.$p["count"].'</td>
        <td>'.$p["cost"].'</td>
        <td>'.$p["percentage"].'</td>
        <td>'.$p["cat"].'</td>
        <td>'.$p["st"].'</td>
        <td><a href="delete_product.php?PRID='.$p["PRID"].'" >Delete</a>|
        <a href="" >Edit</a></td>
    </tr>';
}
echo '</table>
</section>
    <!-- /.content -->
  </div>';
include 'footer.php';
?>

