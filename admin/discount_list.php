<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12/19/16
 * Time: 11:03 PM
 */
include 'config.php';
include 'header.php';
$discounts=$dbh->query("select * from discount;");

echo '
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Discounts

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Discounts</li>
            </ol>
        </section>
    <section class="content">
    <table class="table table-bordered">
<tr>
      <td>DID</td>
      <td>Percentage</td>
      <td>Action</td>
</tr>';
foreach ($discounts as $d){
    echo'<tr>
        <td>'.$d["DID"].'</td>
        <td>'.$d["percentage"].'</td>
        <td><a href="delete_discount.php?DID='.$d["DID"].'" >Delete</a>|
        <a href="" >Edit</a></td>
    </tr>';
}
echo '</table>
</section>
    <!-- /.content -->
  </div>';
include 'footer.php';
?>

