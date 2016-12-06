<?php include 'config.php';
$PRID = $_GET['PRID'];
$sql = "SELECT * FROM product WHERE PRID = " . $PRID;
$product = $dbh->query($sql)->fetch();
$price_after_discount = null;
if ($product['DID']!=null){
    $discount_sql ="SELECT percentage FROM discount WHERE DID = " . $product['DID'];
    $discount=$dbh->query($discount_sql)->fetch();
    $price_after_discount=(1-$discount['percentage'])*$product["cost"];
}
?>
<!DOCTYPE html>
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
    <title>Webmarket HTML Template - Product Page</title>
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

    <?php include 'header.php' ?>
    <?php include 'login_register.php' ?>


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
                            <a href="shop.php">فروشگاه</a>
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
                            <?php echo '<img src="images/dummy/products/' . $PRID . '/1.jpg" alt="" width="940" height="740" id="mainPreviewImg" />'; ?>

                        </div>
                        <div class="thumbs clearfix">
                            <div class="thumb active">
                                <a href="#mainPreviewImg">
                                    <?php echo '<img src="images/dummy/products/' . $PRID . '/1.jpg" alt="" width="940" height="940" /></a>'; ?>
                            </div>
                            <div class="thumb">
                                <a href="#mainPreviewImg">
                                    <?php echo '<img src="images/dummy/products/' . $PRID . '/2.jpg" alt="" width="940" height="940" /></a>'; ?>

                            </div>
                            <div class="thumb">
                                <?php echo '<img src="images/dummy/products/' . $PRID . '/3.jpg" alt="" width="940" height="940" /></a>'; ?>
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
                        <h1 class="name"><span class="light"></span>' . $product['name'] . '</h1>'; ?>

                <div class="meta">
                    <?php
                    if ($price_after_discount==null){
                    echo'<span class="tag">' . $product['cost'] *1000 . ' تومان</span>';}
                    else{
                        echo'<span class="tag" style="text; text-decoration: line-through; color: grey;">' . $product['cost'] *1000 . ' تومان</span>';
                        echo'<span class="tag" style="text; color:forestgreen">' . $price_after_discount *1000 . ' تومان</span>';

                    }
                echo '<span class="stock">';
                if ($product['count'] > 0) {
                    echo '<span class="btn btn-success">موجود</span>';
                } else {
                    echo '<span class="btn btn-danger">اتمام موجودی</span>';
                } ?>
                </span>
            </div>
        </div>
        <div class="product-description">
            <?php echo '
            <p>رنگ :' . $product['color'] . '</p>
            <p>اندازه :' . $product['size'] . '</p>
            <hr />'; ?>

            <!--  ==========  -->
            <!--  = Add to cart form =  -->
            <!--  ==========  -->
            <form action="#" class="form form-inline clearfix">
                <div class="numbered">
                    <input type="text" name="num" value="1" class="tiny-size"/>
                    <span class="clickable add-one icon-plus-sign-alt"></span>
                    <span class="clickable remove-one icon-minus-sign-alt"></span>
                </div>
                <button class="btn btn-danger pull-right"><i class="icon-shopping-cart"></i> اضافه به سبد خرید</button>
            </form>

            <hr/>

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
                    <script type="text/javascript"
                            src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-517459541beb3977"></script>
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
                <?php echo '<form action="comment.php?PRID='. $PRID.'" method="post">' ?>
                    <input style="width: 1100px ; height:100px ;" type="text" name="text">
                    <input type="submit">
                </form>
                <?php
                $sql = "SELECT text,date,user.first_name as first_name,user.last_name as last_name
                      FROM comment,user WHERE user.UID=comment.UID AND PRID = " . $PRID;
                foreach ($dbh->query($sql) as $comment) {
                    echo '<p style="border:1px solid;text-align: left">' . $comment['first_name'] . ' ' . $comment['last_name'] .
                        ': <br>' . $comment['text'] . '<br>' . $comment['date'] . '</p>';
                }
                ?>
            </div>
            <div class="fade tab-pane" id="tab-4">
                <p>
                    لورم ایپسوم متنی است که ساختگی برای طراحی و چاپ آن مورد است. صنعت چاپ زمانی لازم بود شرایطی شما باید
                    فکر ثبت نام و طراحی، لازمه خروج می باشد. در ضمن قاعده همفکری ها جوابگوی سئوالات زیاد شاید باشد،
                    آنچنان که لازم بود طراحی گرافیکی خوب بود. کتابهای زیادی شرایط سخت ، دشوار و کمی در سالهای دور لازم
                    است. هدف از این نسخه فرهنگ پس از آن و دستاوردهای خوب شاید باشد. حروفچینی لازم در شرایط فعلی لازمه
                    تکنولوژی بود که گذشته، حال و آینده را شامل گردد. سی و پنج درصد از طراحان در قرن پانزدهم میبایست
                    پرینتر در ستون و سطر حروف لازم است، بلکه شناخت این ابزار گاه اساسا بدون هدف بود و سئوالهای زیادی در
                    گذشته بوجود می آید، تنها لازمه آن بود...
                </p>
            </div>
        </div>
    </div>
</div>
</div>
</div> <!-- /container -->


<!--  ==========  -->
<!--  = Footer =  -->
<!--  ==========  -->
<?php include 'footer.php' ?>


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
