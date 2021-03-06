<?php
include 'config.php';
session_start();
if (!isset($_SESSION["user"])) {
    echo isset($_SESSION["user"]);
    header("Location: 401.php");
    exit;
} else {
    $current_basket_query = $dbh->prepare("SELECT product.PRID,cost,basket_product.Count,name,percentage
                                                          FROM basket,basket_product,product   
                                                          LEFT OUTER JOIN discount 
                                                          ON product.DID=discount.DID 
                                                          WHERE basket.UID=:UID AND 
                                                          basket_product.PRID=product.PRID AND 
                                                          basket.BID=basket_product.BID AND 
                                                          basket.BID NOT IN                                              
                                                          (SELECT purchase.BID FROM purchase);");
    $current_basket_query->bindParam(':UID', $_SESSION["user"]);
    $current_basket_query->execute();
    $current_basket_items = $current_basket_query->fetchAll();

    $total_cost = 0;
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
    <title>Avita - Checkout Step 1</title>
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


<body class=" checkout-page">

<div class="master-wrapper">


    <div class="container">
        <div class="row">

            <!--  ==========  -->
            <!--  = Main content =  -->
            <!--  ==========  -->
            <section class="span12" style="margin-top: 120px;">

                <div class="checkout-container">
                    <div class="row">
                        <div class="span10 offset1">

                            <!--  ==========  -->
                            <!--  = Header =  -->
                            <!--  ==========  -->
                            <header>
                                <div class="row">
                                    <div class="span2">
                                        <!--                    		    		<a href="index.html"><img src="images/logo-bw.png" alt="Webmarket Logo" width="48" height="48" /></a>-->
                                    </div>
                                    <div class="span6">
                                        <div class="center-align">
                                            <h1><span class="light">بازبینی</span> سبد خرید</h1>
                                        </div>
                                    </div>
                                    <div class="span2">
                                        <div class="right-align">
                                            <!--                    		    	    	<img src="images/buttons/security.jpg" alt="Security Sign" width="92" height="65" />-->
                                        </div>
                                    </div>
                                </div>
                            </header>

                            <!--  ==========  -->
                            <!--  = Steps =  -->
                            <!--  ==========  -->
                            <div class="checkout-steps" style="margin-left: 20px;">
                                <div class="clearfix">
                                    <div class="step active">
                                        <div class="step-badge">1</div>
                                        سبد خرید
                                    </div>
                                    <div class="step">
                                        <div class="step-badge">2</div>
                                        آدرس ارسال
                                    </div>

                                    <div class="step">
                                        <div class="step-badge">3</div>
                                        تایید و پرداخت
                                    </div>
                                </div>
                            </div> <!-- /steps -->

                            <!--  ==========  -->
                            <!--  = Selected Items =  -->
                            <!--  ==========  -->
                            <table class="table table-items">
                                <thead>
                                <tr>
                                    <th colspan="2">آیتم</th>
                                    <th>
                                        <div class="align-center">تعداد</div>
                                    </th>
                                    <th>
                                        <div class="align-right">قیمت</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($current_basket_items as $item) {
                                    echo '<tr>
									<td class="image"><img src="images/dummy/products/' . $item['PRID'] . '/1.jpg" alt="" width="124" height="124" /></td>
									<td class="desc">' . $item['name'] . '<a title="Remove Item" class="icon-remove-sign" href="#"></a></td>
									<td class="qty">
										<input type="text" class="tiny-size" value="'.$item['Count'].'" />
										<input type="hidden" value="' . $item['PRID'] . '" >
									</td>
									<td class="price">';
                                    if ($item['percentage'] == null) {
                                        $total_cost += $item['cost']*$item['Count'];
                                        echo $item['cost']*$item['Count'];
                                    } else {
                                        $total_cost += $item['cost'] * (1 - $item['percentage'])*$item['Count'];
                                        echo $item['cost'] * (1 - $item['percentage'])*$item['Count'];
                                    }
                                    echo 'تومان</td>
									</tr>';
                                } ?>


                                <tr>
                                    <td colspan="2" rowspan="2">
                                        <div class="alert alert-info">
                                            <button data-dismiss="alert" class="close" type="button">×</button>
                                            هزینه ارسال بر اساس منطقه جغرافیایی محاسبه میشود. <a href="#">اطلاعات
                                                بیشتر</a>
                                        </div>
                                    </td>
                                    <!--<td class="stronger">هزینه ارسال :</td>
                                    <td class="stronger">
                                        <div class="align-right">تومان4.99</div>
                                    </td>-->
                                </tr>
                                <tr>
                                    <td class="stronger">جمع کل :</td>
                                    <td class="stronger">
                                        <?php
                                        echo '<div class="size-16 align-right">' . $total_cost . ' تومان</div>'; ?>
                                    </td>
                                </tr>
                                </tbody>
                            </table>

                            <hr/>

                            <p class="right-align">
                                در مرحله بعدی شما آدرس ارسال را انتخاب خواهید کرد. &nbsp; &nbsp;
                                <button class="btn btn-primary higher bold" onclick="submit_basket()">ادامه</button>
                            </p>
                        </div>
                    </div>
                </div>


            </section> <!-- /main content -->

        </div>
    </div> <!-- /container -->


</div> <!-- end of master-wrapper -->


<!--  ==========  -->
<!--  = JavaScript =  -->
<!--  ==========  -->

<!--  = FB =  -->

<div id="fb-root"></div>
<script>
    function submit_basket() {

        var input_tags = document.getElementsByTagName('input');
        var items = [];
        var i;
        for (i = 0; i < input_tags.length - 1; i = i + 2) {
            var product = {};
            product.prid = input_tags[i+1].value;
            product.amount = input_tags[i].value;
            items.push(product);
        }
        var jsonString = JSON.stringify(items);
        $.ajax({
            type: "POST",
            url: "submit_basket.php",
            data: {data: jsonString},
            cache: false,

            success: function () {
                window.location="checkout-step-2.php";
            }

        });
    }
</script>
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

    
    
