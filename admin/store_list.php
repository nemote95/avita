<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12/19/16
 * Time: 11:03 PM
 */
include 'config.php';
include 'header.php';
$stores=$dbh->query("select * from store;");

echo '
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Stores

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Stores</li>
            </ol>
        </section>
    <section class="content">
    <table class="table table-bordered">
<tr>
      <td>SID</td>
      <td>Name</td>
      <td>Action</td>
</tr>';
foreach ($stores as $s){
    echo'<tr>
        <td>'.$s["SID"].'</td>
        <td>'.$s["name"].'</td>
        <td><a href="delete_store.php?SID='.$s["SID"].'" >Delete</a>|
        <a href="" >Edit</a></td>
    </tr>';
}
echo '</table>
</section>
    <!-- /.content -->
  </div>';
include 'footer.php';
?>

