<?php
session_start();
if(isset($_SESSION['SESS_CHANGEID']) == TRUE) {
    session_unset();
    session_regenerate_id();
}
require("config.php");
?>

<?php echo $config_sitename; ?>
<div id="header"></div>
<div id="menu">
    <a href="<?php echo $config_basedir; ?>">Home</a> -

    <a href="<?php echo $config_basedir;?>showcart.php">View Basket/Checkout</a></div>
<div id="container">
    <div id="bar">
        <?php
        require("bar.php");

        echo "<hr />";

        if(isset($_SESSION['SESS_LOGGEDIN']) == TRUE)

        {

            echo "Logged in as <strong>" . $_SESSION['SESS_USERNAME']. "</strong>[<a href=". $config_basedir. 'logout.php'.">logout</a>]";

}

        else{

            echo "<a href=". $config_basedir . 'login.php'.">Login</a>";

}

        ?></div>
    <div id="main">