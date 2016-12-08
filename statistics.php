<?php
include 'config.php';
//purchase in a day
$statement=$dbh->prepare('select Date,sum(cost) as sum 
from purchase,product,basket_product
where basket_product.prid=product.prid and purchase.bid=basket_product.bid and product.did is null group by date');
$statement->execute();
$no_discount=$statement->fetchAll();

$statement=$dbh->prepare('select Date,sum(cost*discount.percentage) as sum 
from purchase,discount,product,basket_product 
where basket_product.prid=product.prid and purchase.bid=basket_product.bid and product.did is not null and product.did=discount.did
group by date;');
$statement->execute();
$with_discount=$statement->fetchAll();

//this code should be revised :|
$total_purchased=array_merge($with_discount,$no_discount);
for ($i=0;$i<count($total_purchased);$i++){
    for ($j=0;$j<count($total_purchased);$j++) {
        if ($total_purchased[$i]["Date"] == $total_purchased[$j]["Date"] && $total_purchased[$i]["sum"] != $total_purchased[$j]["sum"] && $i!=$j ) {
            $total_purchased[$i]["sum"]+=$total_purchased[$j]["sum"];
            unset($total_purchased[$j]);
            break;
        }
    }
}
$total_purchased=json_encode($total_purchased);


$statement=$dbh->prepare('select color,count(color) as color_count  
from basket_product,purchase,product   
where purchase.bid=basket_product.bid and  product.prid=basket_product.prid  
group by color order by color_count desc');
$statement->execute();
$purchase_product_color=$statement->fetchAll();


$statement=$dbh->prepare('select category.name as category,count(product.caid) as category_count 
from category,basket_product,purchase,product  
where purchase.bid=basket_product.bid and
product.prid=basket_product.prid  and
category.caid=product.caid 
group by product.caid');
$statement->execute();
$purchased_category=json_encode($statement->fetchAll());

?>
<html>
<head>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
    <script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
    <!--  Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>

    <!-- Twitter Bootstrap -->
    <link href="stylesheets/bootstrap.css" rel="stylesheet">
    <link href="stylesheets/responsive.css" rel="stylesheet">
    <!-- Slider Revolution -->
    <link rel="stylesheet" href="js/rs-plugin/css/settings.css" type="text/css"/>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="js/jquery-ui-1.10.3/css/smoothness/jquery-ui-1.10.3.custom.min.css" type="text/css"/>
    <!-- PrettyPhoto -->
    <link rel="stylesheet" href="js/prettyphoto/css/prettyPhoto.css" type="text/css"/>
    <!-- main styles -->

    <link href="stylesheets/main.css" rel="stylesheet">
    <meta charset=utf-8 />
    <title>statistics</title>
</head>
<body>
<header style="margin: auto; text-align: center;"><h1>آمار</h1> </header>

<h2 style="margin-top: 20px;text-align: center;">فروش در هر روز :</h2>
<div id="total-purchase" style="width: 800px;height: 400px;margin: auto;"></div>

<h2 style="margin-top: 20px;text-align: center;">میزان فروش رنگ ها :</h2>
<div id="color" style="width: 800px;height: 400px;margin: auto;"></div>

<h2 style="margin-top: 20px;text-align: center;">میزان فروش دسته بندی ها :</h2>
<div id="category" style="width: 800px;height: 400px;margin: auto;"></div>
</body>
<script>
    /*
     * Play with this code and it'll update in the panel opposite.
     *
     * Why not try some of the options above?
     */
    Morris.Area({
        element: 'total-purchase',
        data: <?php echo $total_purchased; ?>,
        xkey: 'Date',
        ykeys: ['sum'],
        labels: ['Total Purchase']
    });

    Morris.Donut({
        element: 'color',
        data: [<?php foreach($purchase_product_color as $c)
            {echo '{label:"'.$c["color"].'",value:'.$c["color_count"].'},';} ?>]

    });

    Morris.Bar({
        element: 'category',
        data: <?php echo $purchased_category; ?>,
        xkey: 'category',
        ykeys: ['category_count'],
        labels: ['Category']
    });
</script>
</html>