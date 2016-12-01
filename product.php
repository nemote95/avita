<?php  include 'config.php';
$PRID= $_GET['PRID'];
$sql="SELECT * FROM product WHERE PRID = " . $PRID ;
$row=$dbh->query($sql)->fetch();
?>
<!DOCTYPE html>
<html>
<!--[if lt IE 8]>      <html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Webmarket HTML Template - Product Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ProteusThemes">

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

    <!--  ==========  -->
    <!--  = Header =  -->
    <!--  ==========  -->
    <header id="header">
        <div class="container">
            <div class="row">

                <!--  ==========  -->
                <!--  = Logo =  -->
                <!--  ==========  -->
                <div class="span7">
                    <a class="brand" href="index.html">
                        <img src="images/logo.png" alt="Webmarket Logo" width="48" height="48" />
                        <span class="pacifico">Webmarket</span>
                        <span class="tagline">قالب فروشگاهی HTML قدرتمند</span>
                    </a>
                </div>

                <!--  ==========  -->
                <!--  = Social Icons =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="topmost-line">
                        <div class="lang-currency">
                            <div class="dropdown js-selectable-dropdown">
                                <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text"><i class="famfamfam-flag-gb"></i> انگلیسی (EN)</span> <b class="caret"></b></a>
                                <!-- for all available country flags look the styles in lib/components/_flags.scss -->
                                <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                                    <li><a href="#"><i class="famfamfam-flag-gb"></i> انگلیسی (EN)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-si"></i> اسلوانیایی (SI)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-de"></i> آلمانی (DE)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-fr"></i> فرانسوی (FR)</a></li>
                                    <li><a href="#"><i class="famfamfam-flag-es"></i> اسپانیولی (ES)</a></li>
                                </ul>
                            </div>
                            <div class="dropdown js-selectable-dropdown">
                                <a data-toggle="dropdown" class="selected" href="#"><span class="js-change-text">USD ($)</span> <b class="caret"></b></a>
                                <ul class="dropdown-menu js-possibilities" role="menu" aria-labelledby="dLabel">
                                    <li><a href="#">USD ($)</a></li>
                                    <li><a href="#">EUR (€)</a></li>
                                    <li><a href="#">YEN (¥)</a></li>
                                    <li><a href="#">GBP (£)</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="top-right">
                        <div class="icons">
                            <a href="http://www.facebook.com/ProteusNet"><span class="zocial-facebook"></span></a>
                            <a href="skype:primozدیوید?call"><span class="zocial-skype"></span></a>
                            <a href="https://twitter.com/proteusnetcom"><span class="zocial-twitter"></span></a>
                            <a href="http://eepurl.com/xFPYD"><span class="zocial-rss"></span></a>
                            <a href="#"><span class="zocial-wordpress"></span></a>
                            <a href="#"><span class="zocial-android"></span></a>
                            <a href="#"><span class="zocial-html5"></span></a>
                            <a href="#"><span class="zocial-windows"></span></a>
                            <a href="#"><span class="zocial-apple"></span></a>
                        </div>
                        <div class="register">
                            <a href="#loginModal" role="button" data-toggle="modal">ورود</a> یا
                            <a href="#registerModal" role="button" data-toggle="modal">ثبت نام</a>
                        </div>
                    </div>
                </div> <!-- /social icons -->
            </div>
        </div>
    </header>

    <!--  ==========  -->
    <!--  = Main Menu / navbar =  -->
    <!--  ==========  -->
    <div class="navbar navbar-static-top" id="stickyNavbar">
        <div class="navbar-inner">
            <div class="container">
                <div class="row">
                    <div class="span9">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <!--  ==========  -->
                        <!--  = Menu =  -->
                        <!--  ==========  -->
                        <div class="nav-collapse collapse">
                            <ul class="nav" id="mainNavigation">
                                <li class="dropdown">
                                    <a href="index.html" class="dropdown-toggle"> خانه <b class="caret"></b> </a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                            <a href="index.html"><i class="icon-caret-left pull-right visible-desktop"></i> رنگ های پوسته</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index.html">پوسته پیش فرض</a></li>
                                                <li><a href="index-grass-green.html">پوسته سبز چمنی</a></li>
                                                <li><a href="index-oil-green.html">پوسته سبز روغنی</a></li>
                                                <li><a href="index-gray.html">پوسته خاکستری</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="index-boxed-solid.html"><i class="icon-caret-left pull-right visible-desktop"></i> ورژن boxed</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="index-boxed-solid.html">Boxed - با رنگ پس زمینه ثابت</a></li>
                                                <li><a href="index-boxed-pattern.html">Boxed - با پس زمینه الگو</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown active">
                                    <a href="shop.html" class="dropdown-toggle"> فروشگاه <b class="caret"></b> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="shop.html">قالب بندی پیش فرض</a></li>
                                        <li><a href="shop-no-sidebar.html">تمام صفحه</a></li>
                                        <li class="active"><a href="product.html">محصول تکی</a></li>
                                        <li><a href="shop-search.html">نتایج جستجو</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="blog.html" class="dropdown-toggle">بلاگ <b class="caret"></b> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="blog.html">قالب بندی پیش فرض</a></li>
                                        <li><a href="blog-single.html">تک نوشته</a></li>
                                        <li><a href="blog-search.html">نتایج جستجو</a></li>
                                        <li><a href="404.html">صفحه 404</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="features.html" class="dropdown-toggle">امکانات <b class="caret"></b> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="icons.html">آیکن ها</a></li>
                                        <li class="dropdown">
                                            <a href="features.html" class="dropdown-toggle"><i class="icon-caret-left pull-right visible-desktop"></i> همه امکانات</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="features.html#headings">سرخط ها</a></li>
                                                <li><a href="features.html#alertBoxes">جعبه های هشدار</a></li>
                                                <li><a href="features.html#tabs">تب ها</a></li>
                                                <li><a href="features.html#buttons">دکمه ها</a></li>
                                                <li><a href="features.html#toggles">تاگل ها</a></li>
                                                <li><a href="features.html#quotes">نقل قول ها</a></li>
                                                <li><a href="features.html#gallery">گرید های گالری</a></li>
                                                <li><a href="features.html#code">کد</a></li>
                                                <li><a href="features.html#columns">ستون ها</a></li>
                                                <li><a href="features.html#maps">نقشه ها</a></li>
                                                <li><a href="features.html#progress">نوار های پیشرفت</a></li>
                                                <li><a href="features.html#tables">جداول</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="about-us.html">درباره ما</a></li>
                                <li><a href="contact.html">تماس با ما</a></li>
                            </ul>

                            <!--  ==========  -->
                            <!--  = Search form =  -->
                            <!--  ==========  -->
                            <form class="navbar-form pull-right" action="#" method="get">
                                <button type="submit"><span class="icon-search"></span></button>
                                <input type="text" class="span1" name="search" id="navSearchInput">
                            </form>
                        </div><!-- /.nav-collapse -->
                    </div>

                    <!--  ==========  -->
                    <!--  = Cart =  -->
                    <!--  ==========  -->
                    <div class="span3">
                        <div class="cart-container" id="cartContainer">
                            <div class="cart">
                                <p class="items">سبد خرید <span class="dark-clr">(3)</span></p>
                                <p class="dark-clr hidden-tablet">$1816.90</p>
                                <a href="checkout-step-1.html" class="btn btn-danger">
                                    <!-- <span class="icon icons-cart"></span> -->
                                    <i class="icon-shopping-cart"></i>
                                </a>
                            </div>
                            <div class="open-panel">

                                <div class="item-in-cart clearfix">
                                    <div class="image">
                                        <img src="images/dummy/cart-items/cart-item-1.jpg" width="124" height="124" alt="cart item" />
                                    </div>
                                    <div class="desc">
                                        <strong><a href="product.html">کلاه زمستانی</a></strong>
                                        <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                    </div>
                                    <div class="price">
                                        <strong>$6393</strong>
                                    </div>
                                </div>

                                <div class="item-in-cart clearfix">
                                    <div class="image">
                                        <img src="images/dummy/cart-items/cart-item-2.jpg" width="124" height="124" alt="cart item" />
                                    </div>
                                    <div class="desc">
                                        <strong><a href="product.html">کمربند اسپورت</a></strong>
                                        <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                    </div>
                                    <div class="price">
                                        <strong>$4837</strong>
                                    </div>
                                </div>

                                <div class="item-in-cart clearfix">
                                    <div class="image">
                                        <img src="images/dummy/cart-items/cart-item-3.jpg" width="124" height="124" alt="cart item" />
                                    </div>
                                    <div class="desc">
                                        <strong><a href="product.html">کیف پول مردانه</a></strong>
                                        <span class="light-clr qty">
                                    تعداد : 1
                                    &nbsp;
                                    <a href="#" class="icon-remove-sign" title="Remove Item"></a>
                                </span>
                                    </div>
                                    <div class="price">
                                        <strong>$3573</strong>
                                    </div>
                                </div>

                                <div class="summary">
                                    <div class="line">
                                        <div class="row-fluid">
                                            <div class="span6">هزینه ارسال :</div>
                                            <div class="span6 align-right">$4.99</div>
                                        </div>
                                    </div>
                                    <div class="line">
                                        <div class="row-fluid">
                                            <div class="span6">جمع کل :</div>
                                            <div class="span6 align-right size-16">$357.81</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="proceed">
                                    <a href="checkout-step-1.html" class="btn btn-danger pull-right bold higher">تصویه حساب <i class="icon-shopping-cart"></i></a>
                                    <small>هزینه ارسال بر اساس منطقه جغرافیایی محاسبه میشود. <a href="#">اطلاعات بیشتر</a></small>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /cart -->
                </div>
            </div>
        </div>
    </div> <!-- /main menu -->




    <!--  ==========  -->
    <!--  = Breadcrumbs =  -->
    <!--  ==========  -->
    <div class="darker-stripe">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">وبمارکت</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="shop.html">فروشگاه</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="#">محصول ویژه</a>
                        </li>
                        <li><span class="icon-chevron-right"></span></li>
                        <li>
                            <a href="product.html">تی شرت مردانه کلاه دار</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--  ==========  -->
    <!--  = Main container =  -->
    <!--  ==========  -->
    <div class="container">
        <div class="push-up top-equal blocks-spacer">

            <!--  ==========  -->
            <!--  = Product =  -->
            <!--  ==========  -->
            <div class="row blocks-spacer">

                <!--  ==========  -->
                <!--  = Preview Images =  -->
                <!--  ==========  -->
                <div class="span5">
                    <div class="product-preview">
                        <div class="picture">
                            <?php echo '<img src="images/dummy/products/'.$PRID.'/1.jpg" alt="" width="940" height="740" id="mainPreviewImg" />'; ?>

                                    </div>
                        <div class="thumbs clearfix">
                            <div class="thumb active">
                                <a href="#mainPreviewImg">
                                    <?php echo '<img src="images/dummy/products/'.$PRID.'/1.jpg" alt="" width="940" height="940" /></a>'; ?>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg">
                                    <?php echo '<img src="images/dummy/products/'.$PRID.'/2.jpg" alt="" width="940" height="940" /></a>'; ?>

                            </div>
                            <div class="thumb">
                                <?php echo '<img src="images/dummy/products/'.$PRID.'/3.jpg" alt="" width="940" height="940" /></a>'; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!--  ==========  -->
                <!--  = Title and short desc =  -->
                <!--  ==========  -->
                <?php
                    echo '<div class="span7">
                    <div class="product-title">
                        <h1 class="name"><span class="light"></span>' . $row['name'] . '</h1>';

                    echo '<div class="meta">
                                <span class="tag">'. $row['cost']*1000 .' تومان</span>';
                    echo '<span class="stock">';
                    if ($row['count']>0){
                        echo '<span class="btn btn-success">موجود</span>';}
                    else{
                        echo '<span class="btn btn-danger">اتمام موجودی</span>';}?>
                </span>
            </div>
        </div>
        <div class="product-description">
            <?php echo '
            <p>رنگ :'. $row['color'] . '</p>
            <p>اندازه :'. $row['size'] .'</p>
            <hr />'; ?>

            <!--  ==========  -->
            <!--  = Add to cart form =  -->
            <!--  ==========  -->
            <form action="#" class="form form-inline clearfix">
                <div class="numbered">
                    <input type="text" name="num" value="1" class="tiny-size" />
                    <span class="clickable add-one icon-plus-sign-alt"></span>
                    <span class="clickable remove-one icon-minus-sign-alt"></span>
                </div>
                <button class="btn btn-danger pull-right"><i class="icon-shopping-cart"></i> اضافه به سبد خرید</button>
            </form>

            <hr />

            <!--  ==========  -->
            <!--  = Share buttons =  -->
            <!--  ==========  -->
            <div class="share-item">
                <div class="pull-right social-networks">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style ">
                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_pinterest_pinit"></a>
                        <a class="addthis_counter addthis_pill_style"></a>
                    </div>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-517459541beb3977"></script>
                    <!-- AddThis Button END -->
                </div>
                با دوستان خود به اشتراک بگذارید :
            </div>

        </div>
    </div>
</div>

<!--  ==========  -->
<!--  = Tabs with more info =  -->
<!--  ==========  -->
<div class="row">
    <div class="span12">
        <ul id="myTab" class="nav nav-tabs">

            <li class="active">
                <a href="#tab-3" data-toggle="tab">نظرات</a>
            </li>
            <li>
                <a href="#tab-4" data-toggle="tab">جزئیات ارسال</a>
            </li>
        </ul>
        <div class="tab-content">


            <div class="fade in tab-pane active" id="tab-3">
                <?php
                $sql="SELECT text,date,user.first_name as first_name,user.last_name as last_name
                      FROM comment,user WHERE user.UID=comment.UID AND PRID = " . $PRID ;
                foreach ($dbh->query($sql) as $comment){
                    echo '<p style="border:1px solid;text-align: left">'.$comment['first_name']. ' '.$comment['last_name'].
                            ': <br>'.$comment['text'] . '<br>'.$comment['date'] .'</p>';
                }
                ?>
            </div>
            <div class="fade tab-pane" id="tab-4">
                <p>
                    لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد، آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد. حروفچینی لازم در شرایط فعلی لازمه تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج درصد از طراحان در قرن پانزدهم میبایست پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در گذشته بوجود می آید، تنها لازمه آن بود...
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div> <!-- /container -->

<!--  ==========  -->
<!--  = Related Products =  -->
<!--  ==========  -->
<div class="boxed-area no-bottom">
    <div class="container">

        <!--  ==========  -->
        <!--  = Title =  -->
        <!--  ==========
        <div class="row">
            <div class="span12">
                <div class="main-titles lined">
                    <h2 class="title"><span class="light">محصولات</span> مرتبط</h2>
                </div>
            </div>
        </div>

        <!--  ==========  -->
        <!--  = Related products =  -->
        <!--  ==========  -->
        <div class="row popup-products">

        </div>
    </div>
</div>





<!--  ==========  -->
<!--  = Footer =  -->
<!--  ==========  -->
<footer>

    <!--  ==========  -->
    <!--  = Upper footer =  -->
    <!--  ==========  -->
    <div class="foot-light">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <h2 class="pacifico">Webmarket &nbsp; <img src="images/webmarket.png" alt="Webmarket Cart" class="align-baseline" /></h2>
                    <p>این یک نوشته آزمایشی است. شما میتوانید این قسمت را با نوشته های دلخواه خود که مناسب این ناحیه باشند پر نمایید. ما این بخش را با نوشته هایی بی معنی پر کرده ایم.</p>
                </div>
                <div class="span4">
                    <div class="main-titles lined">
                        <h3 class="title">فیسبوک</h3>
                    </div>
                    <div class="bordered">
                        <div class="fill-iframe">
                            <div class="fb-like-box" data-href="https://www.facebook.com/ProteusNet" data-width="292" data-height="200" data-colorscheme="dark" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">عضویت</span> در خبرنامه</h3>
                    </div>
                    <p>این بخشی از یک نوشتار آزمایشی صرفا برای پر کردن این ناحیه است.</p>
                    <!-- Begin MailChimp Signup Form -->
                    <div id="mc_embed_signup">
                        <form action="http://proteusthemes.us4.list-manage1.com/subscribe/post?u=ea0786485977f5ec8c9283d5c&amp;id=5dad3f35e9" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form form-inline" target="_blank" novalidate>
                            <div class="mc-field-group">
                                <input type="email" value="" placeholder="آدرس ایمیلتان را وارد کنید" name="EMAIL" class="required email" id="mce-EMAIL">
                                <input type="submit" value="ارسال" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary">
                            </div>
                            <div id="mce-responses" class="clear">
                                <div class="response" id="mce-error-response" style="display:none"></div>
                                <div class="response" id="mce-success-response" style="display:none"></div>
                            </div>

                        </form>
                    </div>
                    <!--End mc_embed_signup-->
                </div>
            </div>
        </div>
    </div> <!-- /upper footer -->

    <!--  ==========  -->
    <!--  = Middle footer =  -->
    <!--  ==========  -->
    <div class="foot-dark">
        <div class="container">
            <div class="row">

                <!--  ==========  -->
                <!--  = Menu 1 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">ناوبری</span> اصلی</h3>
                    </div>
                    <ul class="nav bold">
                        <li><a href="#">خانه</a></li>
                        <li><a href="#">صفحات</a></li>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">کد های میانبر</a></li>
                        <li><a href="#">گالری</a></li>
                        <li><a href="#">تماس با ما</a></li>
                    </ul>
                </div>

                <!--  ==========  -->
                <!--  = Menu 2 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">دومین</span> ناوبری</h3>
                    </div>
                    <ul class="nav">
                        <li><a href="#">پیوند نوشتار آزمایشی</a></li>
                        <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                        <li><a href="#">برند ها</a></li>
                        <li><a href="#">مشاهده آخرین توییت ها</a></li>
                        <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                    </ul>
                </div>

                <!--  ==========  -->
                <!--  = Menu 3 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">سومین</span> ناوبری</h3>
                    </div>
                    <ul class="nav">
                        <li><a href="#">پیوند نوشتار آزمایشی</a></li>
                        <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                        <li><a href="#">برند ها</a></li>
                        <li><a href="#">مشاهده آخرین توییت ها</a></li>
                        <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                    </ul>
                </div>

                <!--  ==========  -->
                <!--  = Menu 4 =  -->
                <!--  ==========  -->
                <div class="span3">
                    <div class="main-titles lined">
                        <h3 class="title"><span class="light">چهارمین</span> ناوبری</h3>
                    </div>
                    <ul class="nav">
                        <li><a href="#">پیوند نوشتار آزمایشی</a></li>
                        <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                        <li><a href="#">برند ها</a></li>
                        <li><a href="#">مشاهده آخرین توییت ها</a></li>
                        <li><a href="#">نوشتار آزمایشی دیگر</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="cpContainter">
            <div class="mcopyright">
                <div class="inside">فارسی سازی و ویرایش توسط <a href="https://mrcode.ir" target="_blank" title="مسترکد">MrCode.ir</a></div>
            </div>
        </div>

    </div> <!-- /middle footer -->

    <!--  ==========  -->
    <!--  = Bottom Footer =  -->
    <!--  ==========  -->
    <div class="foot-last">
        <a href="#" id="toTheTop">
            <span class="icon-chevron-up"></span>
        </a>
        <div class="container">
            <div class="row">
                <div class="span6">
                    &copy; Copyright 2013. Images of products by <a target="_blank" href="http://www.horsefeathers.eu/">horsefeathers</a>.
                </div>
                <div class="span6">
                    <div class="pull-right">قالب HTML وبمارکت توسط<a href="http://www.proteusthemes.com">ProteusThemes</a></div>
                </div>
            </div>
        </div>
    </div> <!-- /bottom footer -->
</footer> <!-- /footer -->


<!--  ==========  -->
<!--  = Modal Windows =  -->
<!--  ==========  -->

<!--  = Login =  -->
<div id="loginModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="loginModalLabel"><span class="light">ورود</span> در وبمارکت</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="#">
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputEmail">نام کاربری</label>
                <div class="controls">
                    <input type="text" class="input-block-level" id="inputEmail" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPassword">رمز عبور</label>
                <div class="controls">
                    <input type="password" class="input-block-level" id="inputPassword" placeholder="Password">
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <label class="checkbox">
                        <input type="checkbox">
                        مرا به خاطر بسپار
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary input-block-level bold higher">
                ورود
            </button>
        </form>
        <p class="center-align push-down-0">
            <a href="#" data-dismiss="modal">رمز عبورتان را فراموش کرده اید؟</a>
        </p>
    </div>
</div>

<!--  = Register =  -->
<div id="registerModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="registerModalLabel"><span class="light">عضویت</span> در وبمارکت</h3>
    </div>
    <div class="modal-body">
        <form method="post" action="#">
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputUsernameRegister">نام کاربری</label>
                <div class="controls">
                    <input type="text" class="input-block-level" id="inputUsernameRegister" placeholder="Username">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputEmailRegister">ایمیل</label>
                <div class="controls">
                    <input type="email" class="input-block-level" id="inputEmailRegister" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label hidden shown-ie8" for="inputPasswordRegister">رمز عبور</label>
                <div class="controls">
                    <input type="password" class="input-block-level" id="inputPasswordRegister" placeholder="Password">
                </div>
            </div>
            <button type="submit" class="btn btn-danger input-block-level bold higher">
                عضویت
            </button>
        </form>
        <p class="center-align push-down-0">
            <a data-toggle="modal" role="button" href="#loginModal" data-dismiss="modal">قبلا ثبت نام کرده اید؟</a>
        </p>

    </div>
</div>


</div> <!-- end of master-wrapper -->



<!--  ==========  -->
<!--  = JavaScript =  -->
<!--  ==========  -->

<!--  = FB =  -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
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
