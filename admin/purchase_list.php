<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12/19/16
 * Time: 11:03 PM
 */
include 'config.php';
include 'header.php';
$purchases=$dbh->query("select * from purchase;");

echo '
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Purchases

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Purchases</li>
            </ol>
        </section>
    <section class="content">
    <table class="table table-bordered">
<tr>
      <td>PUID</td>
      <td>First Name</td>
      <td>Last Name</td>
      <td>Phone</td>
      <td>Address</td>
      <td>Date</td>
      <td>DEID</td>
      <td>Action</td>
</tr>';
foreach ($purchases as $p){
    echo'<tr>
        <td>'.$p["PUID"].'</td>
        <td>'.$p["first_name"].'</td>
        <td>'.$p["last_name"].'</td>
        <td>'.$p["phone"].'</td>
        <td>'.$p["address"].'</td>
        <td>'.$p["date"].'</td>

        <td>'.$p["DEID"].'</td>
        <td><a href="purchase.php?PUID='.$p["PUID"].'" >Edit</a></td>
    </tr>';
}
echo '</table>
</section>
    <!-- /.content -->
  </div>';
include 'footer.php';
?>

