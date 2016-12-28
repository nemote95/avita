<?php
include 'header.php';?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Statistics

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Control Panel</a></li>
                <li class="active">Statistics</li>
            </ol>
        </section>
    <section class="content">

        <?php
        include 'config.php';
        //purchase in a day
        $statement=$dbh->prepare('select Date,sum(cost*(1-isnull(percentage,0))) as sum 
from product LEFT OUTER JOIN discount ON discount.did=product.did 
INNER JOIN basket_product ON basket_product.PRID=product.PRID 
INNER JOIN purchase ON  purchase.bid=basket_product.bid group by date;');
        $statement->execute();
        $total_purchased=$statement->fetchAll();


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
group by product.caid,category.name');
        $statement->execute();
        $purchased_category=json_encode($statement->fetchAll());

        ?>

        <h2 style="margin-top: 20px;text-align: center;">فروش در هر روز </h2>
        <div id="total-purchase" style="width: 800px;height: 400px;margin: auto;"></div>

        <h2 style="margin-top: 20px;text-align: center;">میزان فروش رنگ ها</h2>
        <div id="color" style="width: 800px;height: 400px;margin: auto;"></div>

        <h2 style="margin-top: 20px;text-align: center;">میزان فروش دسته بندی ها </h2>
        <div id="category" style="width: 800px;height: 400px;margin: auto;"></div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
include 'footer.php';
?>
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
