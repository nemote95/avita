<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 12/19/16
 * Time: 11:03 PM
 */
include 'config.php';
include 'header.php';
$users=$dbh->query("select * from users;");

echo '
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Users
           
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Users</li>
            </ol>
        </section>
    <section class="content">
    <table class="table table-bordered">
<tr>
      <td>UID</td>
      <td>Fist Name</td>
      <td>Last Name</td>
      <td>Email</td>
      <td>Password</td>

</tr>';
foreach ($users as $u){
    echo'<tr>
        <td>'.$u["UID"].'</td>
        <td>'.$u["first_name"].'</td>
        <td>'.$u["last_name"].'</td>
        <td>'.$u["email"].'</td>
        <td>'.$u["password"].'</td>
        </tr>';
}
echo '</table>
</section>
    <!-- /.content -->
  </div>';
include 'footer.php';
?>

