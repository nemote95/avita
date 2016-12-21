<?php include 'config.php';
$most_popular_stmnt = "select basket_product.PRID, count(basket_product.PRID) as count ,product.name,product.cost,product.DID
                    from basket_product,purchase,product
                    where purchase.bid=basket_product.bid and product.PRID=basket_product.PRID
                    group by basket_product.PRID
                    order by count desc;";

$most_popular = array_slice($dbh->query($most_popular_stmnt)->fetchAll(),0,4);

$day_product_sql="select product.PRID,product.name,product.cost,product.DID from product where product.count<5 and product.count>0 limit 3";
$day_product=$dbh->query($day_product_sql);
?>
<html>
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
    <title>Avita _ Home</title>
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
    <?php include 'login.php' ?>
    <?php include 'header.php' ?>


    <!--  ==========  -->
    <!--  = Slider Revolution =  -->
    <!--  ==========  -->
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/1/slide.jpg" alt="slider img" width="1400" height="377"/>


                    <!-- texts -->
                    <div class="caption lfl big_theme"
                         data-x="120"
                         data-y="120"
                         data-speed="1000"
                         data-start="500"
                         data-easing="easeInOutBack">
                        با آویتا، هیچ محدودیتی در انتخاب ندارید
                    </div>

                    <div class="caption lfl small_theme"
                         data-x="120"
                         data-y="190"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeInOutBack">
                        با امکانات آویتا آشنا شوید
                    </div>

                    <a href="features.html" class="caption lfl btn btn-primary btn_theme"
                       data-x="120"
                       data-y="260"
                       data-speed="1000"
                       data-start="900"
                       data-easing="easeInOutBack">
                        تمامی امکانات
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/2/slide.jpg" alt="slider img" width="1400" height="377"/>


                    <!-- texts -->
                    <div class="caption lfl big_theme"
                         data-x="120"
                         data-y="120"
                         data-speed="1000"
                         data-start="500"
                         data-easing="easeInOutBack">
                        طراح خود باشید
                    </div>

                    <div class="caption lfl small_theme"
                         data-x="120"
                         data-y="190"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeInOutBack">
                        سایت آویتا به شما این امکان را میدهد تا محصول دلخواه خودرا طراحی کنید .
                    </div>

                    <a href="features.html" class="caption lfl btn btn-primary btn_theme"
                       data-x="120"
                       data-y="260"
                       data-speed="1000"
                       data-start="900"
                       data-easing="easeInOutBack">
                        و خیلی چیز های دیگر
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/3/slide.jpg" alt="slider img" width="1400" height="377"/>


                    <!-- texts -->
                    <div class="caption lfl big_theme"
                         data-x="120"
                         data-y="120"
                         data-speed="1000"
                         data-start="500"
                         data-easing="easeInOutBack">
                        با طراحی مناسب برای موبایل
                    </div>

                    <div class="caption lfl small_theme"
                         data-x="120"
                         data-y="190"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeInOutBack">
                        تمامی عکس ها مشابه نمونه واقعی میباشند.
                    </div>

                    <a href="icons.html" class="caption lfl btn btn-primary btn_theme"
                       data-x="120"
                       data-y="260"
                       data-speed="1000"
                       data-start="900"
                       data-easing="easeInOutBack">
                        بااطمینان خرید کنید ...
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/4/slide.jpg" alt="slider img" width="1400" height="377"/>


                    <!-- texts -->
                    <div class="caption lfl big_theme"
                         data-x="120"
                         data-y="140"
                         data-speed="1000"
                         data-start="500"
                         data-easing="easeInOutBack">
                        بیش از 1000 مشتری خوشنود
                    </div>

                    <div class="caption lfl small_theme"
                         data-x="120"
                         data-y="210"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeInOutBack">
                        پروفایل ما را ببینید در <a href="http://themeforest.net/user/ProteusThemes" target="_blank">ThemeForest</a>!
                    </div>

                    <a href="http://proteusthemes.ticksy.com/" class="caption lfl btn btn-primary btn_theme"
                       data-x="120"
                       data-y="280"
                       data-speed="1000"
                       data-start="900"
                       data-easing="easeInOutBack">
                        به خوبی شما را پشتیبانی میکنیم
                    </a>
                </li><!-- /slide -->
            </ul>
            <div class="tp-bannertimer"></div>
        </div>
        <!--  ==========  -->
        <!--  = Nav Arrows =  -->
        <!--  ==========  -->
        <div id="sliderRevLeft"><i class="icon-chevron-left"></i></div>
        <div id="sliderRevRight"><i class="icon-chevron-right"></i></div>
    </div> <!-- /slider revolution -->

    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
    <div class="container">

        <div class=" over-slider blocks-spacer">

            <!--  ==========  -->
            <!--  = Three Banners =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span4">
                    <a href="#" class="btn btn-block banner">
                        <span class="title"><span class="light">فروش</span> تابستانی</span>
                        <em>تا 60% تخفیف روی کفش ها</em>
                    </a>
                </div>
                <div class="span4">
                    <a href="#" class="btn btn-block colored banner">
                        <span class="title"><span class="light">ارسال</span> رایگان</span>
                        <em>برای خرید های بیش از 69000 تومان</em>
                    </a>
                </div>
                <div class="span4">
                    <a href="#" class="btn btn-block banner">
                        <span class="title"><span class="light">محصولات</span> جدید</span>
                        <em>از محصولات جدید دیدن کنید.</em>
                    </a>
                </div>
            </div> <!-- /three banners -->
        </div>


        <!--  ==========  -->
        <!--  = Featured Items =  -->
        <!--  ==========  -->
        <div class="row featured-items blocks-spacer">
            <div class="span12">

                <!--  ==========  -->
                <!--  = Title =  -->
                <!--  ==========  -->
                <div class="main-titles lined">
                    <h2 class="title"><span class="light">محصولات</span> ویژه</h2>
                    <div class="arrows">
                        <a href="#" class="icon-chevron-right" id="featuredItemsRight"></a>
                        <a href="#" class="icon-chevron-left" id="featuredItemsLeft"></a>
                    </div>
                </div>
            </div>

            <div class="span12">
                <!--  ==========  -->
                <!--  = Carousel =  -->
                <!--  ==========  -->
                <div class="carouFredSel" data-autoplay="false" data-nav="featuredItems">
                    <div class="slide">
                        <div class="row">


                            <!--  ==========  -->
                            <!--  = Product =  -->
                            <!--  ==========  -->
                            <?php
                            foreach($day_product as $dp){
                                echo '<div class="span4" >
                    <div class="product" >
                        <div class="product-img featured" >
                            <div class="picture" >'.
                                    '<img src="images/dummy/products/' . $dp['PRID'] . '/1.jpg" alt = "" width = "518"
                                     height = "358" />';
                                echo   '<div class="img-overlay" >
                                    <a href = "product.php?PRID='.$dp['PRID'].'" class="btn more btn-primary" > توضیحات بیشتر </a >
                                    <form action="add_to_basket.php" method="post" class="form form-inline clearfix">
                                    
                                    <input type="hidden" name="PRID" value="'. $dp['PRID'].'">
                                    <button type="submit" class="btn buy btn-danger"> اضافه به سبد خرید</button>
                                    </form>
                                </div >
                            </div >
                        </div >
                        <div class="main-titles" >';

                                echo '<h3 class="no-margin" >'.$dp['name'].'</h3 >';
                                if ($dp['DID']==null){
                                    echo '<h4 class="title" >'. $dp['cost'].'تومان</h4 >';}
                                else {
                                    echo '<h4 class="title" style="text-decoration: line-through;color: darkslategray;">' . $dp['cost'] .'تومان</h4 >';
                                    $discount_sql="select percentage from discount where DID=".$dp['DID'];
                                    $discount=$dbh->query($discount_sql)->fetch();
                                    echo '<h4 class="title" style="color: forestgreen;">'. $dp['cost']*(1-$discount['percentage']). 'تومان</h4 >';
                                }
                                echo '</div >                        
                    </div >
                </div > <!-- /product-->';
                            } ?>


                        </div>
                    </div>
                    <!--<div class="slide">
                        <div class="row">






                        </div>
                    </div>-->
                </div> <!-- /carousel -->
            </div>

        </div>
    </div> <!-- /container -->

    <!--  ==========  -->
    <!--  = New Products =  -->
    <!--  ==========  -->
    <div class="boxed-area blocks-spacer">
        <div class="container">

            <!--  ==========  -->
            <!--  = Title =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <div class="main-titles lined">
                        <h2 class="title"><span class="light">محصولات</span> جدید فروشگاه</h2>
                    </div>
                </div>
            </div> <!-- /title -->

            <div class="row popup-products blocks-spacer">


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-img">
                            <div class="picture">
                                <img src="images/dummy/products/product-6.jpg" alt="" width="540" height="374"/>
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h3 class="no-margin">نخ های رنگی</h3>
                            <h4 class="title">3200تومان</h4>

                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است در اینجانوشته میشود</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>

                        </p>
                    </div>
                </div> <!-- /product -->


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-img">
                            <div class="picture">
                                <img src="images/dummy/products/product-7.jpg" alt="" width="540" height="374"/>
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h5 class="no-margin"> دستکش های بافت</h5>
                            <h4 class="title">12000 تومان</h4>
                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است در اینجانوشته میشود</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>

                        </p>
                    </div>
                </div> <!-- /product -->


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-img">
                            <div class="picture">
                                <img src="images/dummy/products/product-8.jpg" alt="" width="540" height="374"/>
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h3 class="no-margin">کیف دستی</h3>
                            <h4 class="title">10500تومان</h4>
                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است در اینجا نوشته میشود</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>

                        </p>
                    </div>
                </div> <!-- /product -->


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-img">
                            <div class="picture">
                                <img src="images/dummy/products/product-9.jpg" alt="" width="540" height="374"/>
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h3 class="no-margin">کیف کوچک </h3>
                            <h4 class="title">8200 تومان</h4>

                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است در اینجا نوشته میشود</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>

                        </p>
                    </div>
                </div> <!-- /product -->

                <div class="clearfix"></div>


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-img">
                            <div class="picture">
                                <img src="images/dummy/products/product-10.jpg" alt="" width="540" height="374"/>
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title">32 تومان</h4>
                            <h5 class="no-margin">محصول ویژه 258</h5>
                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>

                        </p>
                    </div>
                </div> <!-- /product -->


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-img">
                            <div class="picture">
                                <img src="images/dummy/products/product-11.jpg" alt="" width="540" height="374"/>
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title">32 تومان</h4>
                            <h5 class="no-margin">محصول ویژه 128</h5>
                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>

                        </p>
                    </div>
                </div> <!-- /product -->


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-img">
                            <div class="picture">
                                <img src="images/dummy/products/product-12.jpg" alt="" width="540" height="374"/>
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title">32 تومان</h4>
                            <h5 class="no-margin">محصول ویژه 156</h5>
                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>

                        </p>
                    </div>
                </div> <!-- /product -->


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="product">
                        <div class="product-img">
                            <div class="picture">
                                <img src="images/dummy/products/product-13.jpg" alt="" width="540" height="374"/>
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title">32 تومان</h4>
                            <h5 class="no-margin">محصول ویژه 218</h5>
                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
                        <p class="center-align stars">
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star stars-clr"></span>
                            <span class="icon-star"></span>
                            <span class="icon-star"></span>

                        </p>
                    </div>
                </div> <!-- /product -->


            </div>
        </div>
    </div> <!-- /new products -->

    <!--  ==========  -->
    <!--  = Most Popular products =  -->
    <!--  ==========  -->
    <div class="most-popular blocks-spacer">
        <div class="container">

            <!--  ==========  -->
            <!--  = Title =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <div class="main-titles lined">
                        <h2 class="title"><span class="light">محبوبترین</span>محصولات فروشگاه</h2>
                    </div>
                </div>
            </div> <!-- /title -->

            <div class="row popup-products">


                <!--  ==========  -->
                <!--  = Product =  -->
                <!--  ==========  -->
                <?php
                foreach ($most_popular as $mp) {
                    echo '<div class="span3" >
                    <div class="product" >
                        <div class="product-img" >
                            <div class="picture" >' .
                        '<img src="images/dummy/products/' . $mp['PRID'] . '/1.jpg" alt = "" width = "540"
                                     height = "412" />';
                    echo '<div class="img-overlay" >
                                    <a href = "product.php?PRID=' . $mp['PRID'] . '" class="btn more btn-primary" > توضیحات بیشتر </a >
                           
                                    <form action="add_to_basket.php" method="post" class="form form-inline clearfix">
                                    
                                    <input type="hidden" name="PRID" value="'. $mp['PRID'].'">
                                    <button type="submit" class="btn buy btn-danger"> اضافه به سبد خرید</button>
                                    </form>
                                </div >
                            </div >
                        </div >
                        <div class="main-titles no-margin" >';

                    echo '<h3 class="no-margin" >' . $mp['name'] . '</h3 >';
                    if ($mp['DID'] == null) {
                        echo '<h4 class="title" >' . $mp['cost'] * 1000 . 'تومان</h4 >';
                    } else {
                        echo '<h4 class="title" style="text-decoration: line-through;color: #190f06;">' . $mp['cost'] * 1000 . 'تومان</h4 >';
                        $discount_sql = "select percentage from discount where DID=" . $mp['DID'];
                        $discount = $dbh->query($discount_sql)->fetch();
                        echo '<h4 class="title" style="color: forestgreen;">' . $mp['cost'] * (1 - $discount['percentage']) * 1000 . 'تومان</h4 >';

                    }
                    echo '</div >                        
                    </div >
                </div > <!-- /product-->';
                } ?>


            </div>
        </div>
    </div> <!-- /most popular -->

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

</body>
</html>

    
    
