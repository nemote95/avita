<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12/19/16
 * Time: 11:03 PM
 */
include 'config.php';
include 'header.php';
$deliverers=$dbh->query("select * from deliverer;");

echo '
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Deliverers
                <a href="deliverer.php" class="btn btn-primary">Create</a>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Deliverers</li>
            </ol>
        </section>
    <section class="content">
    <table class="table table-bordered">
<tr>
      <td>DEID</td>
      <td>Full Name</td>
      <td>Phone</td>
      <td>Action</td>
</tr>';
foreach ($deliverers as $d){
    echo'<tr>
        <td>'.$d["DEID"].'</td>
        <td>'.$d["name"].'</td>
        <td>'.$d["phone"].'</td>
        <td><a href="delete_deliverer.php?DEID='.$d["DEID"].'" >Delete</a>|
        <a href="deliverer.php?DEID='.$d["DEID"].'" >Edit</a></td>
    </tr>';
}
echo '</table>
</section>
    <!-- /.content -->
  </div>';
include 'footer.php';
?>

