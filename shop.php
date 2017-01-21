<?php
include 'config.php';
if (isset($_GET['CAID'])) {
    $catid = $_GET['CAID'];
}
if (isset($_GET['find'])) {
    $searchedProduct = $_GET['find'];
}
if (isset($_GET['size'])) {
    $size = $_GET['size'];
}
$url= $_SERVER["REQUEST_URI"];
?>
<!--[if lt IE 8]>
<html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>
<html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Avita - All Products</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">

    <!--  Google Fonts  -->
    <link
        href='http://fonts.googleapis.com/css?family=Pacifico|Open+Sans:400,700,400italic,700italic&amp;subset=latin,latin-ext,greek'
        rel='stylesheet' type='text/css'>

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


    <!-- Modernizr -->
    <script src="js/modernizr.custom.56918.js"></script>

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/apple-touch/144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/apple-touch/114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch/72.png">
    <link rel="apple-touch-icon-precomposed" href="images/apple-touch/57.png">
    <link rel="shortcut icon" href="images/apple-touch/57.png">

    <link rel="stylesheet" href="assets/bootstrap/bootstrap-slider.css" type="text/css">
</head>


<body class="">

<div class="master-wrapper">

    <?php include 'register.php' ?>
    <?php include 'login.php' ?>

    <?php include 'header.php' ?>

    <!--  ==========  -->
    <!--  = Breadcrumbs =  -->
    <!--  ==========  -->

    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">آویتا</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <?php
                        if (isset($_GET["CAID"])) {
                            $catNameSql = "select * from category where CAID='$catid'";
                            $catName = $dbh->query($catNameSql);

                            foreach ($catName as $cn) {
                                echo '<li>
                            <a href="shop.php">دسته بندی ها</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="shop.php">'.$cn["name"].'</a>';
                            }
                        } else
                            echo '<li>
                            <a href="shop.php">جست و جو</a>
                        </li>'; ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="push-up blocks-spacer">
            <div class="row">

                <!--  ==========  -->
                <!--  = Sidebar =  -->
                <!--  ==========  -->
                <aside class="span3 left-sidebar" id="tourStep1">
                    <div class="sidebar-item sidebar-filters" id="sidebarFilters">

                        <!--  ==========  -->
                        <!--  = Sidebar Title =  -->
                        <!--  ==========  -->
                        <div class="underlined">
                            <h3><span class="light">بر اساس فیلتر</span> خرید کنید</h3>
                            <h5><?php if (isset($_GET['size'])) {
                                    echo '<h4>نتیجه ی فیلتر برای سایز :' . $_GET['size'] . ' </h4>';
                                } ?></h5>
                        </div>

                        <!--  ==========  -->
                        <!--  = Categories =  -->
                        <!--  ==========  -->


                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle">قیمت <b
                                        class="caret"></b></a>
                            </div>
                            <div class="accordion-body in collapse">
                                <div class="accordion-inner with-slider">
                                    <script type="text/javascript">
                                        var minvalue=location.search.split("min_price=")[1]|0;
                                        $(function() {
                                            $( "#slider-range" ).slider({
                                                range: true,
                                                min: minvalue,
                                                max: 20000,
                                                values: [ minvalue, 20000 ],
                                                slide: function( event, ui ) {
                                                    $( "#amount" ).html( ui.values[ 0 ] + " تومان-" + ui.values[ 1 ] +"تومان" );
                                                    $( "#amount1" ).val(ui.values[ 0 ]);
                                                    $( "#amount2" ).val(ui.values[ 1 ]);
//                                                    document.getElementsByClassName("ui-slider-handle ui-state-default ui-corner-all").style.left="100px";
                                                    var minRange= ui.values[0];
                                                    maxPriceChange(ui.values[0],ui.values[ 1 ]);
                                                }
                                            });
                                            $( "#amount" ).html($( "#slider-range" ).slider( "values", 0 ) +
                                                "تومان--" + $( "#slider-range" ).slider( "values", 1 ) +"تومان" );
//                                            var maxRange =ui.values[ 1 ];
//                                            alert(minRange);
                                        });
                                    </script>
                                    <div id="slider-range"></div>
                                        <p id="amount"></p>
<!--                                    <form method="post" action="shop.php">-->
                                        <input type="text" value="<?php if(isset($_GET['min_price'])){echo $_GET['min_price'];}?>" id="amount1" style="width: 60px;float: left;">
                                        <input type="text" value="<?php if(isset($_GET['max_price'])){echo $_GET['max_price'];}?>" id="amount2" style="width: 60px;float: right;">
<!--                                        <input type="submit" name="submit_range" onclick="maxPriceChange();" value="Submit">-->
<!--                                    </form>-->
                                </div>
                            </div>
                        </div> <!-- /prices slider -->
                        <?php

                        ?>
                        <!--  ==========  -->
                        <!--  = Size filter =  -->
                        <!--  ==========  -->
                        <div class="accordion-group" id="tourStep3">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterTwo">سایز <b
                                        class="caret"></b></a>
                            </div>

                            <div id="filterTwo" class="accordion-body collapse">
                                <div  class="accordion-inner">
                                    <input type="checkbox" id="xs" onchange="sizeCheck('xs');"> <label>XS</label>
                                    <input type="checkbox" id="s" onchange="sizeCheck('s');"> <label>S</label>
                                    <input type="checkbox" id="m" onchange="sizeCheck('m');"> <label>M</label>
                                    <input type="checkbox" id="l" onchange="sizeCheck('l');"> <label>L</label>
                                    <input type="checkbox" id="xl" onchange="sizeCheck('xl');"> <label>XL</label>
                                    <input type="checkbox" id="xxl" onchange="sizeCheck('xxl');"> <label>XXL</label>


                                </div>
                            </div>
                        </div> <!-- /size filter -->

                        <!--  ==========  -->
                        <!--  = Color filter =  -->
                        <!--  ==========  -->
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterThree">رنگ <b
                                        class="caret"></b></a>
                            </div>
                            <div id="filterThree" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="red" data-type="color" class="selectable detailed"><i
                                            class="box" onclick="colorChange('red')"></i> قرمز</a>
                                    <a href="#" data-target="green" data-type="color" class="selectable detailed"><i
                                            class="box" onclick="colorChange('green')"></i> سبز</a>
                                    <a href="#" data-target="blue" data-type="color" class="selectable detailed"><i
                                            class="box" onclick="colorChange('blue')"></i> آبی</a>
                                    <a href="#" data-target="pink" data-type="color" class="selectable detailed"><i
                                            class="box" onclick="colorChange('pink')"></i> صورتی</a>
                                    <a href="#" data-target="purple" data-type="color" class="selectable detailed"><i
                                            class="box" onclick="colorChange('purple')"></i> بنفش</a>
                                    <a href="#" data-target="orange" data-type="color" class="selectable detailed"><i
                                            class="box" onclick="colorChange('orange')"></i> نارنجی</a>

                                </div>
                            </div>
                        </div> <!-- /color filter -->
                        <?php
                        if(isset($_GET["CAID"])){
                        echo '<a href="shop.php?CAID='.$_GET['CAID'].'" class="remove-filter" ><span class="icon-ban-circle"></span> حذف
                            همه فیلتر ها
                            </a>';} ?>
                    </div>


                </aside> <!-- /sidebar -->

                <!--  ==========  -->
                <!--  = Main content =  -->
                <!--  ==========  -->
                <section class="span9">

                    <!--  ==========  -->
                    <!--  = Title =  -->
                    <!--  ==========  -->
                    <div class="underlined push-down-20">
                        <div class="row">
                            <div class="span5">
                                <h3><span class="light"> محصولات دسته بندی <?php
                                        if (isset($catName)){
                                        foreach ($catName as $n) {
                                            echo $n['name'];
                                        }} ?></span></h3>
                                <?php if (isset($_GET['find'])) {
                                    echo '<h4>نتیجه ی جست و جو برای :' . $searchedProduct . ' </h4>';
                                }
                                ?>
                            </div>
                            <div class="span4">
                                <div class="form-inline sorting-by" id="tourStep4">
                                    <label for="isotopeSorting" class="black-clr">چینش :</label>
                                    <select id="isotopeSorting" class="span3">
                                        <option onclick="sort('asc')">بر اساس قیمت (کم به
                                            زیاد) &uarr;</option>
                                        <option onclick="sort('desc')">بر اساس قیمت (زیاد
                                            به کم) &darr;</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /title -->

                    <!--  ==========  -->
                    <!--  = Products =  -->
                    <!--  ==========  -->
                    <div class="row popup-products">
                        <div id="isotopeContainer" class="isotope-container">
                            <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->
                            <?php
                            if (isset($_GET['CAID'])) {
                                $product_sql = "select * from product LEFT OUTER JOIN discount ON
											product.DID=discount.DID where CAID=" . $_GET["CAID"];
                                if (isset($_GET["size"])) {
                                    $product_sql = $product_sql . " AND size='" . $_GET["size"] . "'";
                                }
                                if (isset($_GET["color"])) {
                                    $product_sql = $product_sql . " AND color='" . $_GET["color"] . "'";
                                }
//                                if(isset($_POST['submit_range']))
//                                {
//                                    $price1=$_POST['amount1'];
//                                    $price2=$_POST['amount2'];
//
//                                    $product_sql = $product_sql ."AND cost BETWEEN '$price1' AND '$price2'";
//                                }
                                if (isset($_GET["max_price"])) {
                                    $product_sql = $product_sql . " AND cost<" . $_GET["max_price"];
                                }
                                if (isset($_GET["min_price"])) {
                                    $product_sql = $product_sql . " AND cost>" . $_GET["min_price"];
                                }
                                if (isset($_GET["sort"])) {
                                    $product_sql = $product_sql . " ORDER BY cost " . $_GET["sort"];
                                }
                                $products = $dbh->query($product_sql);
                                foreach ($products as $p) {
                                    echo '<div id="spanCat" class="span3 filter--swimwear" data-price="323" data-popularity="3"
                                 data-size="xs|s|m|xxl" data-color="pink|orange" data-brand="adidas">
                                <div class="product">

                                    <div class="product-img">
                                        <div class="picture">
                                            <img width="540" height="374" alt=""
                                                 src="images/dummy/products/' . $p['PRID'] . '/1.jpg"/>
                                            <div class="img-overlay">
                                                <a class="btn more btn-primary" href="product.php?PRID=' . $p['PRID'] . '">توضیحات بیشتر</a> ';
                                                if ($p["count"]>0){
                                               echo ' <form action="add_to_basket.php" method="post" class="form form-inline clearfix">
                                    
												<input type="hidden" name="PRID" value="' . $p['PRID'] . '">
												<button type="submit" class="btn buy btn-danger"> ناموجود</button>
												</form>';}
												else { echo '<button class="btn buy btn-danger"> ناموجود</button>';}
											
                                           echo ' </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin" style="text-align: center;">
                                    <h3 class="no-margin isotope--title">' . $p['name'] . '</h3>
                                    ';
                                    if ($p['percentage'] == Null) {
                                        echo '<h4 class="title">' . $p['cost'] . 'تومان</h4>';
                                    } else {
                                        echo '<h4 class="title" style="text; text-decoration: line-through; color: grey;">' . $p['cost'] . 'تومان</h4>';
                                        echo '<h4 class="title">' . $p['cost'] * (1 - $p['percentage']) . 'تومان</h4>';
                                    }
                                    echo '
                                    </div>
                                </div>
                            </div> <!-- /single product -->';
                                }
                            }
                            ?>

                            <?php
                            if (isset($_GET['find'])) {
                                if ($find = '') {
                                    header("Location: 404.php");
                                    exit();
                                }
                                $find = strtoupper($find);
                                $find = strip_tags($find);
                                $find = trim($find);
                                $searchResult = "select * from product LEFT OUTER JOIN discount ON
											product.DID=discount.DID where name LIKE '%$searchedProduct%'";
                                $result = $dbh->query($searchResult);
                                foreach ($result as $res) {
                                    echo '<div class="span3 filter--swimwear" data-price="323" data-popularity="3"
                                 data-size="xs|s|m|xxl" data-color="pink|orange" data-brand="adidas">
                                <div class="product">

                                    <div class="product-img">
                                        <div class="picture">
                                            <img width="540" height="374" alt=""
                                                 src="images/dummy/products/' . $res['PRID'] . '/1.jpg"/>
                                            <div class="img-overlay">
                                                <a class="btn more btn-primary" href="product.php?PRID=' . $res['PRID'] . '">توضیحات بیشتر</a>
                                                <form action="add_to_basket.php" method="post" class="form form-inline clearfix">
                                    
                                                <input type="hidden" name="PRID" value="' . $res['PRID'] . '">
                                                <button type="submit" class="btn buy btn-danger"> اضافه به سبد خرید</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin" style="text-align: center;">
                                    <h5 class="no-margin isotope--title">' . $res['name'] . '</h5>
                                    ';
                                    if ($res['percentage'] == Null) {
                                        echo '<h4 class="title">' . $res['cost'] . 'تومان</h4>';
                                    } else {
                                        echo '<h4 class="title" style="text; text-decoration: line-through; color: grey;">' . $res['cost'] . 'تومان</h4>';
                                        echo '<h4 class="title">' . $res['cost'] * (1 - $res['percentage']) . 'تومان</h4>';
                                    }
                                    echo '
                                    </div>
                                </div>
                            </div> <!-- /single product -->';
                                }
                            }

                            ?>
                            <!--  ==========  -->
                            <!--  = Single Product =  -->
                            <!--  ==========  -->

                        </div>
                    </div>
                    <hr/>
                </section> <!-- /main content -->
            </div>
        </div>
    </div> <!-- /container -->


    <!--  ==========  -->
    <!--  = Footer =  -->
    <!--  ==========  -->
    <?php include 'footer.php'; ?>


    <!--  ==========  -->
    <!--  = Modal Windows =  -->
    <!--  ==========  -->


</div> <!-- end of master-wrapper -->


<!--  ==========  -->
<!--  = JavaScript =  -->
<!--  ==========  -->

<!--  = FB =  -->

<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=126780447403102";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<!--  = jQuery - CDN with local fallback =  -->
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
    }
</script>

<script>
    var CAID = "<?php echo $catid; ?>";
    var url = "<?php echo $url ?>";
</script>
<script>
    function maxPriceChange(min , max) {
//        alert(min);
        var match=url.match(/min_price=[0-9]+/);
        if (match!=null){
            url=url.replace(/min_price=[0-9]+/,'min_price='+min)
        }
        else{
            url=url+"&min_price="+min
        }

        var mach=url.match(/max_price=[0-9]+/);
        if (mach!=null){
            url=url.replace(/max_price=[0-9]+/,'max_price='+max)
        }
        else{
            url=url+"&max_price="+max
        }
        $.ajax({
            type: "GET",
            url: 'shop.php',
            data: {min_price: min,max_price: max},
            success: function (data) {
                window.location.assign(url);
            },

        });


    }
</script>
<script>
    function sizeCheck(value) {
        var match=url.match(/size=[a-z]+/);
        if (match!=null){
            url=url.replace(/size=[a-z]+/,'size='+value)
        }
        else{
            url=url+"&size="+value
        }

        $.ajax({
            type: "GET",
            url: 'shop.php',
            data: {size: value},
            success: function (data) {

                window.location.assign(url);
            },

        });

    }
</script>
<script>
    function colorChange(value) {
        var match=url.match(/color=[a-z]+/);
        if (match!=null){
            url=url.replace(/color=[a-z]+/,'color='+value)
        }
        else{
            url=url+"&color="+value
        }

        $.ajax({
            type: "GET",
            url: 'shop.php',
            data: {size: value},
            success: function (data) {

                window.location.assign(url);
            },

        });

    }
</script>

<script>
    function sort(value) {


        $.ajax({
            type: "GET",
            url: 'shop.php',
            success: function (data) {

                window.location.assign('shop.php?CAID=' + CAID + '&sort=' + value);
            },

        });

    }
</script>
<!--  = _ =  -->
<script src="js/underscore/underscore-min.js" type="text/javascript"></script>

<!--  = Bootstrap =  -->
<script src="js/bootstrap.min.js" type="text/javascript"></script>

<!--  = Slider Revolution =  -->
<script src="js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
<script src="js/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>

<!--  = CarouFredSel =  -->
<script src="js/jquery.carouFredSel-6.2.1-packed.js" type="text/javascript"></script>

<!--  = jQuery UI =  -->
<script src="js/jquery-ui-1.10.3/js/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
<script src="js/jquery-ui-1.10.3/touch-fix.min.js" type="text/javascript"></script>

<!--  = Isotope =  -->
<script src="js/isotope/jquery.isotope.min.js" type="text/javascript"></script>

<!--  = Tour =  -->
<script src="js/bootstrap-tour/build/js/bootstrap-tour.min.js" type="text/javascript"></script>

<!--  = PrettyPhoto =  -->
<script src="js/prettyphoto/js/jquery.prettyPhoto.js" type="text/javascript"></script>

<!--  = Google Maps API =  -->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="js/goMap/js/jquery.gomap-1.3.2.min.js"></script>

<!--  = Custom JS =  -->
<script src="js/custom.js" type="text/javascript"></script>
<script src="js/angular.js"></script>

<script src="assets/bootstrap/bootstrap-slider.js"></script>

</body>
</html>

    
    
