<?php
require("config.php");

require("validation.php");

$validid = pf_validate_number($_GET['id'],"redirect", $config_basedir);

require("header.php");

$prodcatsql = "SELECT * FROM products WHERE caid = " . $_GET['id'] . ";";

$prodcatres = mysqli_query($prodcatsql);

$numrows = mysql_num_rows($prodcatres);

if($numrows == 0)

{

    echo "<h1>No products</h1>";

    echo "There are no products in this category.";

}

else{

    echo "";
    while($prodrow = mysqli_fetch_assoc($prodcatres)){
        echo "";
        if(empty($prodrow['image'])) {
            echo "";
        }
        else {
            echo "";
        }
        echo "";
        echo "";
    }
    echo "<table cellpadding='10'>
			<tbody><tr>";//image

echo "<h2>" . $prodrow['name'] . "</h2>";

echo "" . $prodrow['color'];
echo "<strong>OUR PRICE: £". sprintf('%.2f', $prodrow['cost']) . "</strong>";
    //calculate discount

echo "<a href='addtobasket.php?id=". $prodrow['pid']."'>buy</a>";

echo "</td></tr>
</tbody>
</table>";

}

require("footer.php");



