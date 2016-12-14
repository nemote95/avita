
    <?php
    if (isset($_GET['CAID'])){
    $catid = $_GET['CAID'];
    }
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
</head>


<body class="">

<div class="master-wrapper">

    <?php include 'register.php' ?>
    <?php include 'login.php'?>

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
                        <li>
                            <a href="shop.php">فروشگاه</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="shop.php">قالب بندی اصلی</a>
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
                            <h4><?php echo $catid; ?></h4>
                        </div>

                        <!--  ==========  -->
                        <!--  = Categories =  -->
                        <!--  ==========  -->
                        <div class="accordion-group" id="tourStep2">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterOne">دسته بندی ها <b
                                        class="caret"></b></a>
                            </div>
                            <div id="filterOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                    <?php
                                    include 'config.php';
                                    $cat_sql = "select * from category";
                                    $categories=$dbh->query($cat_sql);
                                    foreach ($categories as $cat){
                                        echo '<a href="filter.php" data-target=".filter--accessories" class="selectable"><i class="box"></i>'.$cat['name'].'</a>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div> <!-- /categories -->

                        <!--  ==========  -->
                        <!--  = Prices slider =  -->
                        <!--  ==========  -->
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" href="#filterPrices">قیمت <b
                                        class="caret"></b></a>
                            </div>
                            <div id="filterPrices" class="accordion-body in collapse">
                                <div class="accordion-inner with-slider">
                                    <div class="jqueryui-slider-container">
                                        <div id="pricesRange"></div>
                                    </div>
                                    <input type="text" data-initial="432" class="max-val pull-right" disabled/>
                                    <input type="text" data-initial="99" class="min-val" disabled/>
                                </div>
                            </div>
                        </div> <!-- /prices slider -->

                        <!--  ==========  -->
                        <!--  = Size filter =  -->
                        <!--  ==========  -->
                        <div class="accordion-group" id="tourStep3">
                            <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" data-toggle="collapse" href="#filterTwo">سایز <b
                                        class="caret"></b></a>
                            </div>
                            <div id="filterTwo" class="accordion-body collapse">
                                <div class="accordion-inner">
                                    <a href="#" data-target="xs" data-type="size" class="selectable detailed"><i
                                            class="box"></i> XS</a>
                                    <a href="#" data-target="s" data-type="size" class="selectable detailed"><i
                                            class="box"></i> S</a>
                                    <a href="#" data-target="m" data-type="size" class="selectable detailed"><i
                                            class="box"></i> M</a>
                                    <a href="#" data-target="l" data-type="size" class="selectable detailed"><i
                                            class="box"></i> L</a>
                                    <a href="#" data-target="xl" data-type="size" class="selectable detailed"><i
                                            class="box"></i> XL</a>
                                    <a href="#" data-target="xxl" data-type="size" class="selectable detailed"><i
                                            class="box"></i> XXL</a>

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
                                            class="box"></i> قرمز</a>
                                    <a href="#" data-target="green" data-type="color" class="selectable detailed"><i
                                            class="box"></i> سبز</a>
                                    <a href="#" data-target="blue" data-type="color" class="selectable detailed"><i
                                            class="box"></i> آبی</a>
                                    <a href="#" data-target="pink" data-type="color" class="selectable detailed"><i
                                            class="box"></i> صورتی</a>
                                    <a href="#" data-target="purple" data-type="color" class="selectable detailed"><i
                                            class="box"></i> بنفش</a>
                                    <a href="#" data-target="orange" data-type="color" class="selectable detailed"><i
                                            class="box"></i> نارنجی</a>

                                </div>
                            </div>
                        </div> <!-- /color filter -->



                        <a href="#" class="remove-filter" id="removeFilters"><span class="icon-ban-circle"></span> حذف
                            همه فیلتر ها</a>

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
                                <h3><span class="light">همه</span> محصولات</h3>
                            </div>
                            <div class="span4">
                                <div class="form-inline sorting-by" id="tourStep4">
                                    <label for="isotopeSorting" class="black-clr">چینش :</label>
                                    <select id="isotopeSorting" class="span3">
                                        <option value='{"sortBy":"price", "sortAscending":"true"}'>بر اساس قیمت (کم به
                                            زیاد) &uarr;</option>
                                        <option value='{"sortBy":"price", "sortAscending":"false"}'>بر اساس قیمت (زیاد
                                            به کم) &darr;</option>
                                        <option value='{"sortBy":"name", "sortAscending":"true"}'>بر اساس نام
                                            (صعودی) &uarr;</option>
                                        <option value='{"sortBy":"name", "sortAscending":"false"}'>بر اساس نام
                                            (نزولی) &darr;</option>
                                        <option value='{"sortBy":"popularity", "sortAscending":"true"}'>بر اساس محبوبیت
                                            (کم به زیاد) &uarr;</option>
                                        <option value='{"sortBy":"popularity", "sortAscending":"false"}'>بر اساس محبوبیت
                                            (زیاد به کم) &darr;</option>
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
                            $product_sql = "select * from product LEFT OUTER JOIN discount ON
											product.DID=discount.DID where CAID='$catid;'";
                            $products=$dbh->query($product_sql);
                                foreach($products as $p){
                                    echo '<div class="span3 filter--swimwear" data-price="323" data-popularity="3"
                                 data-size="xs|s|m|xxl" data-color="pink|orange" data-brand="adidas">
                                <div class="product">

                                    <div class="product-img">
                                        <div class="picture">
                                            <img width="540" height="374" alt=""
                                                 src="images/dummy/products/'.$p['PRID'].'/1.jpg"/>
                                            <div class="img-overlay">
                                                <a class="btn more btn-primary" href="product.php?PRID='.$p['PRID'].'">توضیحات بیشتر</a>
                                                <form action="add_to_basket.php" method="post" class="form form-inline clearfix">
                                    
												<input type="hidden" name="PRID" value="'. $p['PRID'].'">
												<button type="submit" class="btn buy btn-danger"> اضافه به سبد خرید</button>
												</form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles no-margin">';
										if ($p['percentage']==Null){
                                       echo  '<h4 class="title">'.$p['cost'].'تومان</h4>';
										}
										else{
											echo  '<h4 class="title" style="text; text-decoration: line-through; color: grey;">'.$p['cost'].'تومان</h4>';
											echo  '<h4 class="title">'.$p['cost']*(1-$p['percentage']).'تومان</h4>';
										}
                                        echo '<h5 class="no-margin isotope--title">'.$p['name'].'</h5>
                                    </div>
                                </div>
                            </div> <!-- /single product -->';
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
    if (typeof jQuery == 'undefined') {
        document.write('<script src="js/jquery.min.js"><\/script>');
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
<script src="js/angular.js"

</body>
</html>

    
    
