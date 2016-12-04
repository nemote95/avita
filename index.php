<?php include 'config.php';
$most_popular_sql = "select basket_product.PRID, count(basket_product.PRID) as count ,product.name,product.cost,product.DID
                    from basket_product,purchase,product
                    where purchase.bid=basket_product.bid and product.PRID=basket_product.PRID
                    group by basket_product.PRID
                    order by count desc 
                    limit 4";
$most_popular=$dbh->query($most_popular_sql);

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
    <title>Webmarket HTML Template _ Home</title>
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

    <?php include 'login_register.php' ?>
    <?php include 'header.php' ?>


    <!--  ==========  -->
    <!--  = Slider Revolution =  -->
    <!--  ==========  -->
    <div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <ul>
                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/1/slide.jpg" alt="slider img" width="1400" height="377"/>
                    <!-- baloons -->
                    <div class="caption lft ltt"
                         data-x="570"
                         data-y="50"
                         data-speed="4000"
                         data-start="1000"
                         data-easing="easeOutElastic">
                        <img src="images/dummy/slides/1/baloon1.png" alt="baloon" width="135" height="186"/>
                    </div>

                    <div class="caption lft ltt"
                         data-x="770"
                         data-y="60"
                         data-speed="4000"
                         data-start="1200"
                         data-easing="easeOutElastic">
                        <img src="images/dummy/slides/1/baloon3.png" alt="baloon" width="40" height="55"/>
                    </div>

                    <div class="caption lft ltt"
                         data-x="870"
                         data-y="80"
                         data-speed="4000"
                         data-start="1500"
                         data-easing="easeOutElastic">
                        <img src="images/dummy/slides/1/baloon2.png" alt="baloon" width="60" height="83"/>
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme"
                         data-x="120"
                         data-y="120"
                         data-speed="1000"
                         data-start="500"
                         data-easing="easeInOutBack">
                        با وبمارکت، هیچ محدودیتی ندارید
                    </div>

                    <div class="caption lfl small_theme"
                         data-x="120"
                         data-y="190"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeInOutBack">
                        با امکانات قالب HTML وبمارکت آشنا شوید
                    </div>

                    <a href="features.html" class="caption lfl btn btn-primary btn_theme"
                       data-x="120"
                       data-y="260"
                       data-speed="1000"
                       data-start="900"
                       data-easing="easeInOutBack">
                        تمامی امکانات قالب
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/2/slide.jpg" alt="slider img" width="1400" height="377"/>

                    <!-- woman -->
                    <div class="caption lfb ltb"
                         data-x="800"
                         data-y="50"
                         data-speed="1000"
                         data-start="1000"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/2/woman.png" alt="woman" width="361" height="374"/>
                    </div>

                    <!-- plane -->
                    <div class="caption lfl str"
                         data-x="400"
                         data-y="20"
                         data-speed="10000"
                         data-start="1000"
                         data-easing="linear">
                        <img src="images/dummy/slides/2/plane.png" alt="aircraft" width="117" height="28"/>
                    </div>

                    <!-- texts -->
                    <div class="caption lfl big_theme"
                         data-x="120"
                         data-y="120"
                         data-speed="1000"
                         data-start="500"
                         data-easing="easeInOutBack">
                        Slider Revolution
                    </div>

                    <div class="caption lfl small_theme"
                         data-x="120"
                         data-y="190"
                         data-speed="1000"
                         data-start="700"
                         data-easing="easeInOutBack">
                        این اسلایدر پریمیوم، به عنوان یک هدیه، به صورت رایگان به شما عرضه میشود!
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

                    <!-- phone -->
                    <div class="caption sfr fadeout"
                         data-x="950"
                         data-y="77"
                         data-speed="1000"
                         data-start="2500"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/3/phone.png" alt="phone in a hand" width="495" height="377"/>
                    </div>

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
                        پنجره مرورگر خود را تغییر سایز دهید، خواهید دید که وبمارکت روی هر رزولوشنی به خوبی کار میکند.
                    </div>

                    <a href="icons.html" class="caption lfl btn btn-primary btn_theme"
                       data-x="120"
                       data-y="260"
                       data-speed="1000"
                       data-start="900"
                       data-easing="easeInOutBack">
                        در ضمن آیکن های آن هم مناسب رتینا هستند ...
                    </a>
                </li><!-- /slide -->

                <li data-transition="premium-random" data-slotamount="3">
                    <img src="images/dummy/slides/4/slide.jpg" alt="slider img" width="1400" height="377"/>

                    <!-- faces -->
                    <div class="caption lft ltt"
                         data-x="-150"
                         data-y="0"
                         data-speed="300"
                         data-start="2000"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person1.png" alt="satisfied customer" width="108" height="204"/>
                    </div>
                    <div class="caption lft ltt"
                         data-x="0"
                         data-y="0"
                         data-speed="300"
                         data-start="2200"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person2.png" alt="satisfied customer" width="108" height="321"/>
                    </div>
                    <div class="caption lft ltt"
                         data-x="500"
                         data-y="0"
                         data-speed="300"
                         data-start="2400"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person3.png" alt="satisfied customer" width="108" height="139"/>
                    </div>
                    <div class="caption lft ltt"
                         data-x="720"
                         data-y="0"
                         data-speed="300"
                         data-start="2600"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person4.png" alt="satisfied customer" width="108" height="191"/>
                    </div>
                    <div class="caption lft ltt"
                         data-x="940"
                         data-y="0"
                         data-speed="300"
                         data-start="2800"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person5.png" alt="satisfied customer" width="108" height="139"/>
                    </div>
                    <div class="caption lft ltt"
                         data-x="1200"
                         data-y="0"
                         data-speed="300"
                         data-start="3000"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person6.png" alt="satisfied customer" width="108" height="179"/>
                    </div>
                    <div class="caption lft ltt"
                         data-x="1350"
                         data-y="0"
                         data-speed="300"
                         data-start="3200"
                         data-easing="easeInOutCubic">
                        <img src="images/dummy/slides/4/person7.png" alt="satisfied customer" width="108" height="133"/>
                    </div>

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
        <div class="row">
            <div class="span12">
                <div class="push-up over-slider blocks-spacer">

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
            </div>
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
                            <div class="span4">
                                <div class="product">
                                    <div class="product-img featured">
                                        <div class="picture">
                                            <img src="images/dummy/featured-products/featured-1.png" alt="" width="518"
                                                 height="358"/>
                                            <div class="img-overlay">
                                                <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                                <a href="#" class="btn buy btn-danger">خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles">
                                        <h4 class="title">$115</h4>
                                        <h5 class="no-margin">محصول ویژه 652</h5>
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
                            <div class="span4">
                                <div class="product">
                                    <div class="product-img featured">
                                        <div class="picture">
                                            <img src="images/dummy/featured-products/featured-2.png" alt="" width="518"
                                                 height="358"/>
                                            <div class="img-overlay">
                                                <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                                <a href="#" class="btn buy btn-danger">خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles">
                                        <h4 class="title">$91</h4>
                                        <h5 class="no-margin">محصول ویژه 735</h5>
                                    </div>
                                    <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
                                    <p class="center-align stars">
                                        <span class="icon-star stars-clr"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>

                                    </p>
                                </div>
                            </div> <!-- /product -->


                            <!--  ==========  -->
                            <!--  = Product =  -->
                            <!--  ==========  -->
                            <div class="span4">
                                <div class="product">
                                    <div class="product-img featured">
                                        <div class="picture">
                                            <img src="images/dummy/featured-products/featured-3.png" alt="" width="518"
                                                 height="358"/>
                                            <div class="img-overlay">
                                                <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                                <a href="#" class="btn buy btn-danger">خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles">
                                        <h4 class="title">$40</h4>
                                        <h5 class="no-margin">محصول ویژه 387</h5>
                                    </div>
                                    <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
                                    <p class="center-align stars">
                                        <span class="icon-star stars-clr"></span>
                                        <span class="icon-star stars-clr"></span>
                                        <span class="icon-star stars-clr"></span>
                                        <span class="icon-star stars-clr"></span>
                                        <span class="icon-star"></span>

                                    </p>
                                </div>
                            </div> <!-- /product -->


                        </div>
                    </div>
                    <div class="slide">
                        <div class="row">


                            <!--  ==========  -->
                            <!--  = Product =  -->
                            <!--  ==========  -->
                            <div class="span4">
                                <div class="product">
                                    <div class="product-img featured">
                                        <div class="picture">
                                            <img src="images/dummy/featured-products/featured-1.png" alt="" width="518"
                                                 height="358"/>
                                            <div class="img-overlay">
                                                <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                                <a href="#" class="btn buy btn-danger">خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles">
                                        <h4 class="title">$41</h4>
                                        <h5 class="no-margin">محصول ویژه 515</h5>
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
                            <div class="span4">
                                <div class="product">
                                    <div class="product-img featured">
                                        <div class="picture">
                                            <img src="images/dummy/featured-products/featured-2.png" alt="" width="518"
                                                 height="358"/>
                                            <div class="img-overlay">
                                                <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                                <a href="#" class="btn buy btn-danger">خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles">
                                        <h4 class="title">$107</h4>
                                        <h5 class="no-margin">محصول ویژه 690</h5>
                                    </div>
                                    <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
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
                            <div class="span4">
                                <div class="product">
                                    <div class="product-img featured">
                                        <div class="picture">
                                            <img src="images/dummy/featured-products/featured-3.png" alt="" width="518"
                                                 height="358"/>
                                            <div class="img-overlay">
                                                <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                                <a href="#" class="btn buy btn-danger">خرید</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="main-titles">
                                        <h4 class="title">$61</h4>
                                        <h5 class="no-margin">محصول ویژه 405</h5>
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
                            <h4 class="title">$32</h4>
                            <h5 class="no-margin">محصول ویژه 434</h5>
                        </div>
                        <p class="desc">توضیحاتی که در مورد محصول لازم است را در اینجا مینویسید</p>
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
                            <h4 class="title">$32</h4>
                            <h5 class="no-margin">محصول ویژه 414</h5>
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
                                <img src="images/dummy/products/product-8.jpg" alt="" width="540" height="374"/>
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title">$32</h4>
                            <h5 class="no-margin">محصول ویژه 450</h5>
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
                                <img src="images/dummy/products/product-9.jpg" alt="" width="540" height="374"/>
                                <div class="img-overlay">
                                    <a href="#" class="btn more btn-primary">توضیحات بیشتر</a>
                                    <a href="#" class="btn buy btn-danger">اضافه به سبد خرید</a>
                                </div>
                            </div>
                        </div>
                        <div class="main-titles no-margin">
                            <h4 class="title">$32</h4>
                            <h5 class="no-margin">محصول ویژه 186</h5>
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
                            <h4 class="title">$32</h4>
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
                            <h4 class="title">$32</h4>
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
                            <h4 class="title">$32</h4>
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
                            <h4 class="title">$32</h4>
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
                foreach($most_popular as $mp){
                    echo '<div class="span3" >
                    <div class="product" >
                        <div class="product-img" >
                            <div class="picture" >'.
                        '<img src="images/dummy/products/' . $mp['PRID'] . '/1.jpg" alt = "" width = "540"
                                     height = "412" />';
                             echo   '<div class="img-overlay" >
                                    <a href = "product.php?PRID='.$mp['PRID'] .'" class="btn more btn-primary" > توضیحات بیشتر </a >
                                    <a href = "#" class="btn buy btn-danger" > اضافه به سبد خرید </a >
                                </div >
                            </div >
                        </div >
                        <div class="main-titles no-margin" >';

                            echo '<h3 class="no-margin" >'.$mp['name'].'</h3 >';
                                if ($mp['DID']==null){
                                    echo '<h4 class="title" >'. $mp['cost']*1000 .'تومان</h4 >';}
                                else {
                                    echo '<h4 class="title" style="text-decoration: line-through;color: grey;">'. $mp['cost']*1000 .'تومان</h4 >';
                                    $discount_sql="select percentage from discount where DID=".$mp['DID'];
                                    $discount=$dbh->query($discount_sql)->fetch();
                                    echo '<h4 class="title" style="color: forestgreen;">'. $mp['cost']*(1-$discount['percentage'])*1000 .'تومان</h4 >';

                                }
                        echo '</div >                        
                    </div >
                </div > <!-- /product-->';
                } ?>


            </div>
        </div>
    </div> <!-- /most popular -->

    <!--  ==========  -->
    <!--  = Lastest News =  -->
    <!--  ==========  -->
    <div class="darker-stripe blocks-spacer more-space latest-news with-shadows">
        <div class="container">

            <!--  ==========  -->
            <!--  = Title =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <div class="main-titles center-align">
                        <h2 class="title">
                            <span class="clickable icon-chevron-right" id="tweetsRight"></span> &nbsp;&nbsp;&nbsp;
                            <span class="light">آخرین</span> خبر ها &nbsp;&nbsp;&nbsp;
                            <span class="clickable icon-chevron-left" id="tweetsLeft"></span>
                        </h2>
                    </div>
                </div>
            </div> <!-- /title -->

            <!--  ==========  -->
            <!--  = News content =  -->
            <!--  ==========  -->
            <div class="row">
                <div class="span12">
                    <div class="carouFredSel" data-nav="tweets" data-autoplay="false">


                        <!--  ==========  -->
                        <!--  = Slide =  -->
                        <!--  ==========  -->
                        <div class="slide">
                            <div class="row">
                                <div class="span6">
                                    <div class="news-item">
                                        <div class="published">12 بهمن 1392</div>
                                        <h6><a href="#">عنوان خبر شما</a></h6>
                                        <p>در این قسمت میتوانید خبر خود را بنویسید. این یک نوشته ی آزمایشی است که صرفا
                                            برای پر کردن این بخش به کار رفته و جنبه ی دیگری ندارد. شما میتوانید این
                                            ناحیه را با محتوای دلخواه خود پر کنید.</p>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="news-item">
                                        <div class="published">15 بهمن 1392</div>
                                        <h6><a href="#">یک خبر جالب دیگر</a></h6>
                                        <p>در این قسمت میتوانید خبر خود را بنویسید. این یک نوشته ی آزمایشی است که صرفا
                                            برای پر کردن این بخش به کار رفته و جنبه ی دیگری ندارد. شما میتوانید این
                                            ناحیه را با محتوای دلخواه خود پر کنید.</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /slide -->


                        <!--  ==========  -->
                        <!--  = Slide =  -->
                        <!--  ==========  -->
                        <div class="slide">
                            <div class="row">
                                <div class="span6">
                                    <div class="news-item">
                                        <div class="published">12 بهمن 1392</div>
                                        <h6><a href="#">عنوان خبر شما</a></h6>
                                        <p>در این قسمت میتوانید خبر خود را بنویسید. این یک نوشته ی آزمایشی است که صرفا
                                            برای پر کردن این بخش به کار رفته و جنبه ی دیگری ندارد. شما میتوانید این
                                            ناحیه را با محتوای دلخواه خود پر کنید.</p>
                                    </div>
                                </div>
                                <div class="span6">
                                    <div class="news-item">
                                        <div class="published">15 بهمن 1392</div>
                                        <h6><a href="#">یک خبر جالب دیگر</a></h6>
                                        <p>در این قسمت میتوانید خبر خود را بنویسید. این یک نوشته ی آزمایشی است که صرفا
                                            برای پر کردن این بخش به کار رفته و جنبه ی دیگری ندارد. شما میتوانید این
                                            ناحیه را با محتوای دلخواه خود پر کنید.</p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- /slide -->

                    </div>
                </div>
            </div> <!-- /news content -->
        </div>
    </div> <!-- /latest news -->

    <!--  ==========  -->
    <!--  = Brands Carousel =  -->
    <!--  ==========  -->
    <div class="container blocks-spacer-last">

        <!--  ==========  -->
        <!--  = Title =  -->
        <!--  ==========  -->
        <div class="row">
            <div class="span12">
                <div class="main-titles lined">
                    <h2 class="title"><span class="light">برند های</span> ما</h2>
                    <div class="arrows">
                        <a href="#" class="icon-chevron-right" id="brandsRight"></a>
                        <a href="#" class="icon-chevron-left" id="brandsLeft"></a>
                    </div>
                </div>
            </div>
        </div> <!-- /title -->

        <!--  ==========  -->
        <!--  = Logos =  -->
        <!--  ==========  -->
        <div class="row">
            <div class="span12">
                <div class="brands carouFredSel" data-nav="brands" data-autoplay="true">
                    <img src="images/dummy/brands/brands_01.jpg" alt="" width="203" height="104"/>
                    <img src="images/dummy/brands/brands_02.jpg" alt="" width="203" height="104"/>
                    <img src="images/dummy/brands/brands_03.jpg" alt="" width="203" height="104"/>
                    <img src="images/dummy/brands/brands_04.jpg" alt="" width="203" height="104"/>
                    <img src="images/dummy/brands/brands_05.jpg" alt="" width="203" height="104"/>
                    <img src="images/dummy/brands/brands_06.jpg" alt="" width="203" height="104"/>
                </div>
            </div>
        </div> <!-- /logos -->
    </div> <!-- /brands carousel -->

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

    
    