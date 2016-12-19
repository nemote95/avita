<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12/19/16
 * Time: 11:03 PM
 */
include 'config.php';
include 'header.php';
$categories=$dbh->query("select * from category;");

echo '
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Categories

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Categories</li>
            </ol>
        </section>
    <section class="content">
    <table class="table table-bordered">
<tr>
      <td>CAID</td>
      <td>Name</td>
      <td>Action</td>
</tr>';
foreach ($categories as $c){
    echo'<tr>
        <td>'.$c["CAID"].'</td>
        <td>'.$c["name"].'</td>
        <td><a href="" >Delete</a>|
        <a href="" >Edit</a></td>
    </tr>';
}
echo '</table>
</section>
    <!-- /.content -->
  </div>';
 include 'footer.php';
?>

