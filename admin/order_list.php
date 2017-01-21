<?php

include 'config.php';
include 'header.php';
$orders=$dbh->query("select * from orders;");

echo '
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Orders

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Orders</li>
            </ol>
        </section>
    <section class="content">
    <table class="table table-bordered">
<tr>
      <td>OID</td>
      <td>Description</td>
</tr>';
foreach ($orders as $o){
    echo'<tr>
        <td>'.$o["OID"].'</td>
        <td>'.$o["text"].'</td>
        <td><a href="delete_order.php?OID='.$o["OID"].'" >Delete</a>|
        <a href="order.php?OID='.$o["OID"].'" >view</a></td>
    </tr>';
}
echo '</table>
</section>
    <!-- /.content -->
  </div>';
include 'footer.php';
?>

